<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Attendance;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function markAttendance(Request $request)
    {
        // dd($request->all());
        if (empty($request->id)) {
            $notification = array(
                'message' => 'Mark at least one student!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        foreach($request->id As $id){
            Attendance::firstOrCreate([
                'class_id' => $request->get('q'),
                'user_id' => auth()->id(),
                'application_id' => $id,
            ]);
        }

        $notification = array(
            'message' => 'Attendance taken successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function attendance(Request $request)
    {
        $id = $request->get('q');
        $class = Course::select('title','id')->where('id', $id)->first();
        $attendances = Attendance::select('application_id')->where('class_id', $id)->where('user_id', auth()->id())->get()->all();
        $attendance = [];
        foreach ($attendances as  $value) {
           $attendance[] = $value->application_id;
        }
        $applicants = Application::with('user')->where('add_to_count', 1)->whereHas('circle', function($q){
            $q->where('head_id', auth()->id());
        })->where('status', 'approved')->get();
        return view('admin.markattendance', compact('applicants', 'class','attendance'));
    }

    public function index()
    {
        $courses = Course::all();
        return view('admin.course', compact('courses'));
    }

    public function store(Request $request)
    {
        $validate  = Validator::make($request->all(), [
            'title' => 'required',
            'course_image'=> 'file|image|mimes:jpeg,png,gif,webp',
        ]);
        if($validate->fails()){
            $notification = array(
                'message' => $validate->messages()->first(),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }


        $data = $request->only(['title', 'description']);

        if($request->hasFile('course_image')){
            $course_image = $request->file('course_image');
            $data['course_image'] = $filename = time() . '.' . $course_image->getClientOriginalExtension();
            $course_image->move(public_path().'/images/course/',$filename);
        }
        $class = new Course($data);
        if($class->save()){
            $notification = array(
                'message' => "Class Added Successfully.",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
