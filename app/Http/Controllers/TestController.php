<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ApplicationAssignment;
use Illuminate\Support\Facades\Validator;
use App\Imports\ApplicationAssignmentImport;

class TestController extends Controller
{
    public function index()
    {
        $tests = Assignment::where('type', 'test')->get();
        return view('admin.test',compact('tests'));
    }

    public function store(Request $request)
    {
        $validate  = Validator::make($request->all(), [
            'topic' => 'required', 'url'
        ]);
        if($validate->fails()){
            $notification = array(
                'message' => $validate->messages()->first(),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $data = $request->only(['topic', 'url']);
        $data['type'] = 'test';
        $test = new Assignment($data);
        if ($test->save()) {
            $notification = array(
                'message' => 'Test Added Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Test Can\'t be  Added at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $test = Assignment::where('id',$id)->first();
        $test->topic = $request->topic;
        $test->status = $request->status;
        $test->url = $request->url;
        if ($test->save()) {
            $notification = array(
                'message' => 'Test Updated Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Test Can\'t be  Updated at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function deleteTest(Request $request)
    {
        $id = $request->id;
        $delete_test = Assignment::where('id',$id)->delete();
        if($delete_test){
            $notification = array(
                'message' => 'Test Deleted Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Test Can\'t be Deleted!',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function viewResult($id)
    {
        $applicants = ApplicationAssignment::with(['applications'=> function($q){
            $q->with('user')->where('add_to_count', 1);
        }])->where('assignment_id', $id)->get();
        $result = Assignment::where('id',$id)->first();
        return view('admin.viewresult',compact('applicants','result'));
    }

    public function addResult()
    {
        $id = request()->id;
        $file = request()->file('result_file')->store('import/result');
        $results = (new ApplicationAssignmentImport)->toArray($file);
        $array_result = [];
        foreach ($results as $key => $result) {
            $res = $this->storeApplicantResult($result, $key, $id);
            $array_result[$key] = $res;
        }
        $notification = array(
            'message' => 'Result Submitted Successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function storeApplicantResult($result,$key, $id)
    {

        $array_result = [];
        foreach ($result as $key => $value) {
            $email = $value['email_address'];
            $checkUserExist = User::where('reg_no', $value['registration_number'])->orWhereHas('application',function ($q) use ($email)
            {
                $q->where('email', $email);
            })->with(['application'=> function($q){
                        $q->with('circle')->where('add_to_count', 1)->whereHas('circle');
                    }])->first();
            if ($checkUserExist) {
                $head_id = $checkUserExist->application->circle->head_id;
                $application_id = $checkUserExist->application_id;
                $checkIfSubmitted = ApplicationAssignment::where('assignment_id', $id)->where('application_id',$application_id)->first();
                if (!$checkIfSubmitted) {
                    $insertResult = new ApplicationAssignment;
                    $insertResult->assignment_id = $id;
                    $insertResult->application_id = $application_id;
                    $insertResult->user_id = $head_id;
                    $insertResult->score = $value['score'];
                    // $insertResult->created_at = date('Y-m-d H:i:s', round($value['timestamp']));
                    if($insertResult->save()){
                        $array_result[$key]['result'] = 'DONE';
                    }
                }
            }
        }

        return $array_result;
    }
}
