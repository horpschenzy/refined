<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Livestream;
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
        return view('members.profile');
    }
}
