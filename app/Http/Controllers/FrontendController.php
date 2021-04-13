<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected function customLogin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'email';
        if(auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password'])))
        {
            $notification = array(
                'message' => 'Login successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('home')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Invalid Email Or Password!',
                'alert-type' => 'error'
            );
            return redirect()->route('/login')
                ->with($notification);
        }
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
