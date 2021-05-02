<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Resource;
use App\Models\Livestream;
use App\Models\Application;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\DataTables\ApplicationDataTable;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        $applicants = Application::where('add_to_count', 1)->where('status', 'approved')->get();

        return view('admin.approved', compact('applicants'));
    }

    public function pending()
    {
        $applicants = Application::where('add_to_count', 1)->where('status', 'pending')->get();

        return view('admin.pending', compact('applicants'));
    }

    public function rejected()
    {
        $applicants = Application::where('add_to_count', 1)->where('status', 'rejected')->get();

        return view('admin.rejected', compact('applicants'));
    }

    public function profile()
    {
        $applicant = Application::where('id', Auth::user()->application_id)->first();
        return view('admin.profile', compact('applicant'));
    }

    public function users()
    {
        $users = Application::where('add_to_count', 0)->get();
        return view('admin.users', compact('users'));
    }
    
    public function livestream()
    {
        $livestreams = Livestream::all();
        return view('admin.livestream', compact('livestreams'));
    }

    public function classroom()
    {
        return view('admin.classroom');
    }

    public function resource()
    {
        $resources = Resource::all();
        return view('admin.resource', compact('resources'));
    }

    public function attendance()
    {
        return view('admin.attendance');
    }
    public function index(ApplicationDataTable $dataTable)
    {

        // $user = Auth::user();
        $applicants = Application::where('add_to_count', 1)->where('status', 'pending')->get();
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
