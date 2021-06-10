<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Course;
use App\Models\Resource;
use App\Models\Livestream;
use App\Models\Application;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\DataTables\ApplicationDataTable;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function solveRegIssue()
    {
        $applications = Application::whereDoesntHave("user")->where('add_to_count',1)->where('status', 'approved')->get();
        // dd($applications);
        foreach ($applications as  $application) {
            $newId = $application->id;

            if ($newId < 10) {
                $id = "000".$newId;
            }
            elseif ($newId >= 10 AND $newId < 100) {
                $id = "00".$newId;
            }
            elseif ($newId >= 100 AND $newId < 1000) {
                $id = "0".$newId;
            }
            else{
                $id = $newId;
            }
            $reg_no = 'REF/'.date('Y').'/'.$id;
            $getExisted = User::where('reg_no', $reg_no)->first();
            $newregno = ($getExisted) ? 'REF/'.date('Y').'/'.(2000 + (int)$id) : $reg_no;
            $user = new User();
            $user->reg_no = $newregno;
            $user->application_id = $application->id;
            $user->password = Hash::make(strtolower($application->lastname.$application->id));
            $user->save();
        }
        return 'ok';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editUser(Request $request)
    {
        $getApplication = Application::where('id', $request->id)->first();
        $getApplication->firstname = $request->firstname;
        $getApplication->lastname = $request->lastname;
        if ($getApplication->save()) {
            $user = User::where('application_id', $request->id)->first();
            if(!$user){

                $user = new User();
                $user->password = Hash::make(strtolower($getApplication->lastname));
            }
            $user->application_id = $getApplication->id;
            $user->reg_no = $request->email;
            $user->usertype = $request->usertype;
            $user->family_circle = $request->family_circle;
            $user->telegram_link = $request->telegram_link;

            if ($user->save()) {
                $notification = array(
                    'message' => 'User Updated Successfully!',
                    'alert-type' => 'success'
                );
                return back()->with($notification);
            }
            $notification = array(
                'message' => 'User Can\'t be updated!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'User Can\'t be updated!',
            'alert-type' => 'error'
        );
        return back()->with($notification);

    }
    public function deleteUser(Request $request)
    {
        $id = $request->id;
        Application::where('id',$id)->delete();
        $delete_user = User::where('application_id',$id)->delete();
        if($delete_user){
            $notification = array(
                'message' => 'User Deleted Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'User Can\'t be Deleted!',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function assignApplicants(Request $request, $id)
    {
        if ($request->family_circle) {

            $check_head = DB::table('head_member')->where('head_id',$request->family_circle)->count();
            if($check_head == 35){
                $notification = array(
                    'message' => 'Maximum amount reached for this family circle!',
                    'alert-type' => 'error'
                );
                return redirect('/approved')->with($notification);
            }
            $check_member = DB::table('head_member')->where('application_id',$id);
            $user = User::select('reg_no')->where('application_id', $id)->first();
            $applicant = Application::where('id', $id);
            $head_details = User::select('family_circle','telegram_link')->where('id', $request->family_circle)->first();

            if ($check_member) {
                $update = $check_member->update(['head_id'=> $request->family_circle, 'application_id' => $id]);
                $applicant->update(['assign' => 1]);
                if ($update) {
                    $details = [];
                    $details['name'] = $applicant->first()->firstname;
                    $details['reg_no'] = $user->reg_no;
                    $details['family_circle'] = $head_details->family_circle;
                    $details['telegram_link'] = $head_details->telegram_link;
                    $details['password'] = strtolower($applicant->first()->lastname.$id);
                    $this->email = $applicant->first()->email;
                    $details['email'] = $applicant->first()->email;
                    Mail::send('emails.onboarding', $details , function($message){
                        $message->to($this->email)
                                ->subject('WELCOME ON BOARD');
                    });
                    $notification = array(
                        'message' => 'Member Assigned Successfully!',
                        'alert-type' => 'success'
                    );
                    return redirect('/approved')->with($notification);
                }
            }
            $insert = DB::insert('insert into head_member (head_id, application_id) values (?, ?)', [$request->family_circle, $id]);
            if ($insert) {
                $applicant->update(['assign' => 1]);
                $details = [];
                $details['name'] = $applicant->first()->firstname;
                $details['reg_no'] = $user->reg_no;
                $details['family_circle'] = $head_details->family_circle;
                $details['telegram_link'] = $head_details->telegram_link;
                $details['password'] = strtolower($applicant->first()->lastname.$id);
                $this->email = $applicant->first()->email;
                $details['email'] = $applicant->first()->email;
                Mail::send('emails.onboarding', $details , function($message){
                    $message->to($this->email)
                            ->subject('WELCOME ON BOARD');
                });
                $notification = array(
                    'message' => 'Member Assigned Successfully!',
                    'alert-type' => 'success'
                );
                return redirect('/approved')->with($notification);
            }
        }

        $notification = array(
            'message' => 'Kindly Select a Family circle head!',
            'alert-type' => 'error'
        );
        return redirect('/approved')->with($notification);
    }

    public function sendMail()
    {
        $applicants = Application::select('email')->where('add_to_count', 1)->where('status', 'approved')->get();
        foreach ($applicants as $value) {
            $details = [];
            $this->email = $value->email;
            $details['email'] = $value->email;
            Mail::send('emails.newmail', $details , function($message){
                $message->to($this->email)
                        ->subject('Refined Update Mail');
            });
        }

        $notification = array(
            'message' => 'Mail Sent Successfully!',
            'alert-type' => 'success'
        );
        return redirect('/approved')->with($notification);

    }

    public function family(){


        $users = Application::with('user')->where('add_to_count', 0)->get();
        return view('admin.familylist', compact('users'));
    }

    public function addAdmin(Request $request)
    {

        $getemailexist = User::where('reg_no',$request->email)->first();
        if ($getemailexist) {
            $notification = array(
                'message' => "User already exist.",
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        // $notification = array(
        //     'message' => "User Can't be added Successfully.",
        //     'alert-type' => 'success'
        // );
        // $check = DB::transaction(function()
        // {
            $application = new Application();
            $application->firstname = request()->firstname;
            $application->lastname = request()->lastname;
            $application->add_to_count = 0;
            if ($application->save()) {

                User::create([
                    'reg_no' => request()->email,
                    'application_id' => $application->id,
                    'usertype' => request()->usertype,
                    'password' => bcrypt(request()->password),
                    'encrypt' => (request()->password),
                    'telegram_link' => (request()->telegram_link),
                    'family_circle' => (request()->family_circle),
                ]);
                $notification = array(
                    'message' => "User Added Successfully.",
                    'alert-type' => 'success'
                );
                $details = [];
                $details['name'] = request()->firstname;
                $details['username'] = request()->email;
                $details['password'] = request()->password;
                $details['family_circle'] = request()->family_circle;
                $details['usertype'] = request()->usertype;
                $this->email = request()->email;
                Mail::send('emails.family_head', $details , function($message){
                    $message->to($this->email)
                            ->subject('Refined Appoints You');
                });
                return redirect()->back()->with($notification);

            }
            // });
            // print_r($check); die;
    }


    public function edit(Request $request)
    {
        $id = $request->id;
        $applicant = Application::where('id',$id);

        dd($applicant);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $applicant = Application::where('id',$id);
        $updateapplicant = $applicant->delete();
        if($updateapplicant){
            return true;
        }
        return false;
    }

    public function reject(Request $request)
    {
        $id = $request->id;
        $applicant = Application::where('id',$id);
        $updateapplicant = $applicant->update(['status'=>'rejected']);
        if($updateapplicant){
            $details = [];
            $details['name'] = $applicant->first()->lastname;
            $this->email = $applicant->first()->email;
            Mail::send('emails.welcomemail', $details , function($message){
                $message->to($this->email)
                        ->subject('Refined Rejection Mail');
            });
            $notification = array(
                'message' => "Application Rejected Successfully.",
                'alert-type' => 'success'
            );
            return true;
        }
        return false;
    }

    public function pend(Request $request)
    {
        $id = $request->id;
        $updateapplicant = Application::where('id',$id)->update(['status'=>'pending']);
        if($updateapplicant){
            $notification = array(
                'message' => "Application Added To Pending List Successfully.",
                'alert-type' => 'success'
            );
            return true;
        }
        return false;
    }

    public function accept(Request $request)
    {
        $countApplication = Application::where('status', 'approved')->count();
        if($countApplication >= 1000){
            return false;
        }
        $id = $request->id;
        $applicant = Application::where('id',$id);
        $updateapplicant = $applicant->update(['status'=>'approved']);
        if($updateapplicant){
            $details = [];
            $details['name'] = $applicant->first()->lastname;
            $user = User::where('application_id', $id);
            $details['code'] = uniqid('REF');
            $details['reg_no'] = $user->first()->reg_no;
            $details['password'] = strtolower($applicant->first()->lastname.$id);
            $this->email = $applicant->first()->email;
            $user->update(['email_code' => $details['code']]);
            Mail::send('emails.refined', $details , function($message){
                $message->to($this->email)
                        ->subject('Refined Acceptance Mail');
            });
            $notification = array(
                'message' => "Application Accepted Successfully.",
                'alert-type' => 'success'
            );
            return true;
        }
        return false;
    }

    public function approved()
    {
        $applicants = Application::with('circle')->where('add_to_count', 1)->where('status', 'approved')->paginate(25);
        $family_circles = User::select('family_circle', 'id')->whereNotNull('family_circle')->get();
        return view('admin.approved', compact('applicants', 'family_circles'));
    }

    public function pending()
    {
        $applicants = Application::where('add_to_count', 1)->where('status', 'pending')->paginate(25);

        return view('admin.pending', compact('applicants'));
    }

    public function rejected()
    {
        $applicants = Application::where('add_to_count', 1)->where('status', 'rejected')->paginate(25);

        return view('admin.rejected', compact('applicants'));
    }

    public function profile()
    {
        $applicant = Application::where('id', Auth::user()->application_id)->first();
        return view('admin.profile', compact('applicant'));
    }

    public function users()
    {
        $users = Application::with('user')->where('add_to_count', 0)->get();
        return view('admin.users', compact('users'));
    }

    public function livestream()
    {
        $livestreams = Livestream::all();
        return view('admin.livestream', compact('livestreams'));
    }

    public function classroom()
    {
        $livestream = Livestream::where('status', 'started')->first();
        return view('admin.classroom', compact('livestream'));
    }
    public function showClassroom($id, $type)
    {
        $livestream = Livestream::where('status', 'started')->first();
        return view('admin.indexclassroom', compact('livestream','type'));
    }

    public function resource()
    {
        $resources = Resource::all();
        return view('admin.resource', compact('resources'));
    }

    public function attendance()
    {
        $courses = Course::all();
        return view('admin.attendance', compact('courses'));
    }
    public function index(ApplicationDataTable $dataTable)
    {

        // $user = Auth::user();

        $applicants = (auth()->user()->usertype == 'admin') ?
                            Application::where('add_to_count', 1)->where('status', 'pending')->paginate(25)
                        :
                            Application::where('add_to_count', 1)->whereHas('circle', function($q){
                                $q->where('head_id', auth()->id());
                            })->where('status', 'approved')->paginate(25);
        // dd($applicants->links());
        $countapplicants['all'] = Application::where('add_to_count', 1)->count();
        $countapplicants['approved'] = Application::where('status', 'approved')->where('add_to_count', 1)->count();
        $countapplicants['pending'] = Application::where('status', 'pending')->where('add_to_count', 1)->count();
        $countapplicants['rejected'] = Application::where('status', 'rejected')->where('add_to_count', 1)->count();

        return $dataTable->render('admin.dashboard', compact('countapplicants', 'applicants'));
    }

    public function applicants()
    {
        return DataTables::of(Application::where('add_to_count', 1)->get())->toJson();
    }

    public function logout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'Logout Successfully!',
            'alert-type' => 'success'
        );
        return redirect('/login')->with($notification);
    }
}
