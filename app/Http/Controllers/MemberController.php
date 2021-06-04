<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Resource;
use App\Models\Livestream;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function rejectAdmission(Request $request, $email_code)
    {
        $user = User::select('reg_no','email_code')->where('email_code', $email_code)->where('reg_no', $request->username)->first();
        if (!$user) {
            $notification = array(
                'message' => 'Error Rejecting Admission',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification)->withInput();
        }


        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('reg_no' => $input['username'], 'password' => $input['password'])))
        {
            Application::where('id', Auth::user()->application_id)->update(['status' => 'rejected']);
            User::where('id', Auth::id())->update(['email_code', NULL]);
            $notification = array(
                'message' => 'Admission Rejected successfully!',
                'alert-type' => 'success'
            );
            Auth::logout();
            return redirect('/')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Invalid Password!',
                'alert-type' => 'error'
            );
            return redirect()->back()
                ->with($notification);
        }
    }

    public function acceptAdmission(Request $request, $email_code)
    {
        $user = User::select('reg_no','email_code')->where('email_code', $email_code)->where('reg_no', $request->username)->first();
        if (!$user) {
            $notification = array(
                'message' => 'Error Rejecting Admission',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification)->withInput();
        }


        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('reg_no' => $input['username'], 'password' => $input['password'])))
        {
            $notification = array(
                'message' => 'Admission Accepted successfully!',
                'alert-type' => 'success'
            );
            User::where('id', Auth::id())->update(['email_code', NULL]);
            return redirect()->route('member.dashboard')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Invalid Password!',
                'alert-type' => 'error'
            );
            return redirect()->back()
                ->with($notification);
        }
    }

    public function reject($email_code)
    {
        $user = User::select('reg_no','email_code','application_id')->where('email_code', $email_code)->first();
        if (!$user) {
            $notification = array(
                'message' => 'Error Rejecting Admission',
                'alert-type' => 'error'
            );
            return redirect('/')->with($notification)->withInput();
        }

        Application::where('id', $user->application_id)->update(['status' => 'rejected']);
        User::where('id', $user->id)->update(['email_code' => NULL]);
        $notification = array(
            'message' => 'Admission Rejected successfully!',
            'alert-type' => 'success'
        );
        return redirect('/')->with($notification)->withInput();
    }

    public function accept($email_code)
    {
        $user = User::select('reg_no','email_code','id')->where('email_code', $email_code)->first();
        if (!$user) {
            $notification = array(
                'message' => 'Error Accepting Admission',
                'alert-type' => 'error'
            );
            return redirect('/')->with($notification)->withInput();
        }

        $notification = array(
            'message' => 'Admission Accepted successfully!',
            'alert-type' => 'success'
        );
        User::where('id', $user->id)->update(['email_code' => NULL]);

        return redirect('/')->with($notification)->withInput();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('members.dashboard');
    }

    public function resource()
    {
        $resources = Resource::all();
        return view('members.resources', compact('resources'));
    }

    public function classroom()
    {
        $livestream = Livestream::where('status', 'started')->first();
        return view('members.classroom', compact('livestream'));
    }

    public function course()
    {
        return view('members.course');
    }

    public function examandtest()
    {
        return view('members.examandtest');
    }

    public function settings()
    {
        return view('members.settings');
    }

    public function profile()
    {
        $applicant = Application::where('id', Auth::user()->application_id)->first();
        return view('members.profile', compact('applicant'));
    }

    public function editProfile(Request $request)
    {

        $applicant = Application::where('id', Auth::user()->application_id);
        if($request->hasFile('picture')){
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path().'/images/',$filename);
            if($applicant->first()->picture){
                unlink(public_path('/images/'.$applicant->first()->picture));
            }
        }else{
            $filename = $applicant->first()->picture;
        }
        $updateapplicant = $applicant->update([
                                          'firstname' => $request->firstname,
                                          'lastname' => $request->lastname,
                                          'email' => $request->email,
                                          'phone' => $request->phone,
                                          'country' => $request->country,
                                          'state' => $request->state,
                                          'picture' => $filename,
                                        ]);
        if($updateapplicant){
            $notification = array(
                'message' => "Profile Updated Successfully.",
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
    }

    public function changePassword(Request $request)
    {
        if (!Hash::check($request->password, auth()->user()->password)) {
            $notification = array(
                'message' => 'Current Password Does not match. Check and try again!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification)->withInput();
        }

        $validate  = Validator::make($request->all(), [
            'password' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'same:newpassword',
        ]);

        if($validate->fails()){
            $notification = array(
                'message' => $validate->messages()->first(),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification)->withInput();
        }

        $updatepassword = User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newpassword)]);
        if($updatepassword){
            $notification = array(
                'message' => "Password Changed Successfully.",
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
    }

    public function memberslogin()
    {
        return view('frontend.memberslogin');
    }
}
