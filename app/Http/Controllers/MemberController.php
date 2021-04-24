<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

    public function index()
    {
        return view('members.dashboard');
    }

    public function resource()
    {
        return view('members.resources');
    }

    public function classroom()
    {
        return view('members.classroom');
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
}
