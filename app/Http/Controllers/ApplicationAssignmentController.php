<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\HeadMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ApplicationAssignment;
use Illuminate\Support\Facades\Validator;

class ApplicationAssignmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewSubmissions($id)
    {
        $applicants = ApplicationAssignment::with(['applications'=> function($q){
            $q->with('user')->where('add_to_count', 1)->whereHas('circle', function($x){
                $x->where('head_id', auth()->id());
            });
        }])->where('assignment_id', $id)->get();
        $assignment = Assignment::where('id',$id)->first();

        return view('admin.applicantsassignment',compact('applicants', 'assignment'));
    }
    public function markAssignment(Request $request, $id)
    {
        $getAssignment = ApplicationAssignment::find($id);
        $getAssignment->score = $request->score;
        if($getAssignment->save()){

            $notification = array(
                'message' => 'Score Assigned Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Score Can\'t be  Assigned at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }
    public function store(Request $request, $id)
    {
        $validate  = Validator::make($request->all(), [
            'document'=> 'file',
        ]);
        if($validate->fails()){
            $notification = array(
                'message' => $validate->messages()->first(),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $data['text'] = $request->text;
        if($request->hasFile('document')){
            $document = $request->file('document');
            $data['document'] = $filename = time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path().'/images/application_assignment/',$filename);
        }
        $data['user_id'] = HeadMember::where('application_id', Auth::id())->first()->head_id;
        $data['application_id'] = Auth::user()->application->id;
        $data['assignment_id'] = $id;
        $applicationassignment = new ApplicationAssignment($data);
        if ($applicationassignment->save()) {
            $notification = array(
                'message' => 'Assignment Submitted Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => 'Assignment Can\'t be  Submitted at this time, Please try again later.',
            'alert-type' => 'error'
        );
        return back()->with($notification);

    }
}
