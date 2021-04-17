<?php

namespace App\Http\Controllers;


use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function reject($id)
    {
        $updateapplicants = Application::where('id',$id)->update(['status'=>'rejected']);
        if($updateapplicants){
            $notification = array(
                'message' => "Application Rejected Successfully.",
                'alert-type' => 'success'
            );
            return redirect('/rejected')->with($notification);
        }
    }
    
    public function pend($id)
    {
        $updateapplicants = Application::where('id',$id)->update(['status'=>'pending']);
        if($updateapplicants){
            $notification = array(
                'message' => "Application Added To Pending List Successfully.",
                'alert-type' => 'success'
            );
            return redirect('/pending')->with($notification);
        }
    }
    
    public function accept($id)
    {
        $updateapplicants = Application::where('id',$id)->update(['status'=>'approved']);
        if($updateapplicants){
            $notification = array(
                'message' => "Application Accepted Successfully.",
                'alert-type' => 'success'
            );
            return redirect('/approved')->with($notification);
        }
    }
    
    public function approved()
    {
        $applicants = Application::where('firstname','!=','Admin')->where('status', 'approved')->get();

        return view('admin.approved', compact('applicants'));
    }

    public function pending()
    {
        $applicants = Application::where('firstname','!=','Admin')->where('status', 'pending')->get();

        return view('admin.pending', compact('applicants'));
    }

    public function rejected()
    {
        $applicants = Application::where('firstname','!=','Admin')->where('status', 'rejected')->get();

        return view('admin.rejected', compact('applicants'));
    }

    public function index()
    {

        // $user = Auth::user();
        $applicants = Application::where('firstname','!=','Admin')->get();
        $countapplicants['all'] = Application::where('firstname','!=','Admin')->count();
        $countapplicants['approved'] = Application::where('status', 'approved')->where('firstname','!=','Admin')->count();
        $countapplicants['pending'] = Application::where('status', 'pending')->where('firstname','!=','Admin')->count();
        $countapplicants['rejected'] = Application::where('status', 'rejected')->where('firstname','!=','Admin')->count();

        return view('admin.dashboard', compact('countapplicants', 'applicants'));
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
