<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function results()
    {
        return view('members.results');
    }

    public function adminresults()
    {
        return view('admin.results');
    }

    public function index()
    {
        $exams = Assignment::where('type', 'exam')->get();
        return view('admin.exam',compact('exams'));
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
        $data['type'] = 'exam';
        $exam = new Assignment($data);
        if ($exam->save()) {
            $notification = array(
                'message' => 'Exam Added Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Exam Can\'t be  Added at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $exam = Assignment::where('id',$id)->first();
        $exam->topic = $request->topic;
        $exam->status = $request->status;
        $exam->url = $request->url;
        if ($exam->save()) {
            $notification = array(
                'message' => 'Exam Updated Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Exam Can\'t be  Updated at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function deleteExam(Request $request)
    {
        $id = $request->id;
        $delete_exam = Assignment::where('id',$id)->delete();
        if($delete_exam){
            $notification = array(
                'message' => 'Exam Deleted Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Exam Can\'t be Deleted!',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }
}
