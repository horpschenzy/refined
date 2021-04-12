<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    //

    public function store(Request $request)
    {
        $validate  = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'maritalstatus' => 'required',
            'gender' => 'required',
            'agerange' => 'required',
            'prefer_com' => 'required',
            'setman' => 'required',
            'advert' => 'required',
            'born_again' => 'required',
            'yearbornagain'  => 'required',
            'holyghost' => 'required',
            'church' => 'required',
            'departmentchurch'  => 'required',
            'picture'=> 'file|image|mimes:jpeg,png,gif,webp|max:2048',

        ]);
        if($validate->fails()){
            $notification = array(
                'message' => $validate->messages()->first(),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification)->withInput();
        }
        $getStudentCount = count(Application::all());
        $newId = $getStudentCount + 1;
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

        $data = $request->only([
                                    'firstname', 'lastname','email', 'phone','telegram_phone','country',
                                    'state', 'maritalstatus', 'gender','agerange', 'prefer_com', 'advert',
                                    'setman', 'born_again', 'yearbornagain', 'holyghost', 'church', 'departmentchurch',
                                    'pastor_wife', 'take_refined', 'denied_admission', 'yearofattendance', 'graduate_refined',
                                    'retake', 'expectation'
                            ]);
        if($request->hasFile('picture')){
            $picture = $request->file('picture');
            $data['picture'] = $filename = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path().'/images/',$filename);
        }

        $application = new Application($data);
        if($application->save()){

            $user = new User();
            $user->reg_no = 'REF/'.date('Y').'/'.$id;
            $user->application_id = $application->id;
            $user->password = Hash::make($request->lastname.$id);
            $user->save();

            $details = [];
            $details['name'] = $request->lastname;
            $this->email = $request->email;
            Mail::send('emails.welcomemail', $details , function($message){
                $message->to($this->email)
                        ->subject('Refined Welcomes You');
            });
            $notification = array(
                'message' => "Registeration Successful. Kindly check your mail to continue.",
                'alert-type' => 'success'
            );
            return redirect('/')->with($notification);
        }               

    }
}
