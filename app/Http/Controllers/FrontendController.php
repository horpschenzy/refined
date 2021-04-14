<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected function customLogin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('reg_no' => $input['username'], 'password' => $input['password'])))
        {
            $notification = array(
                'message' => 'Login successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('dashboard')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Invalid Email Or Password!',
                'alert-type' => 'error'
            );
            return redirect()->route('login')
                ->with($notification);
        }
    }

    public function success()
    {
        return view('frontend.done');
    }
    
    public function login()
    {
        return view('frontend.login');
    }

    public function landing()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function apply()
    {
        return view('frontend.apply');
    }

    public function faq()
    {
        return view('frontend.faq');
    }
}
