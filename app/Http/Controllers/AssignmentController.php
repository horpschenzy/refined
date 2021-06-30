<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AssignmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function memberAssignment()
    {
        $assignments = Assignment::with(['submissions' => function($q)
        {
            $q->where('application_id',Auth::id());
        }])->where('type','assignment')->get();
        return view('members.assignment',compact('assignments'));
    }
    public function memberExam()
    {
        $exams = Assignment::with(['submissions' => function($q)
        {
            $q->where('application_id',Auth::id());
        }])->where('type','exam')->get();
        return view('members.exam',compact('exams'));
    }

    public function memberTest()
    {
        $tests = Assignment::with(['submissions' => function($q)
        {
            $q->where('application_id',Auth::id());
        }])->where('type','test')->get();
        return view('members.test',compact('tests'));
    }
    public function index()
    {
        $assignments = Assignment::where('type', 'assignment')->get();
        return view('admin.assignment',compact('assignments'));
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
        $data['type'] = 'assignment';
        $assignment = new Assignment($data);
        if ($assignment->save()) {
            $notification = array(
                'message' => 'Assignment Added Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Assignment Can\'t be  Added at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }
    public function update(Request $request, $id)
    {
        $assignment = Assignment::where('id',$id)->first();
        $assignment->topic = $request->topic;
        $assignment->status = $request->status;
        $assignment->url = $request->url;
        if ($assignment->save()) {
            $notification = array(
                'message' => 'Assignment Updated Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Assignment Can\'t be  Updated at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function deleteAssignment(Request $request)
    {
        $id = $request->id;
        $delete_assignment = Assignment::where('id',$id)->delete();
        if($delete_assignment){
            $notification = array(
                'message' => 'Assignment Deleted Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Assignment Can\'t be Deleted!',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }
}
