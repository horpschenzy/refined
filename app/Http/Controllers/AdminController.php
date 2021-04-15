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

    public function members()
    {
        return view('admin.members');
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
