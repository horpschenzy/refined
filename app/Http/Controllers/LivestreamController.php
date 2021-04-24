<?php

namespace App\Http\Controllers;

use App\Models\Livestream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LivestreamController extends Controller
{
    //

    public function store(Request $request)
    {
        
        
        $validate  = Validator::make($request->all(), [
            'event_name' => 'required',
            'url' => 'required',
            'type' => 'required',
            'picture'=> 'file|image|mimes:jpeg,png,gif,webp',
        ]);
        if($validate->fails()){
            $notification = array(
                'message' => $validate->messages()->first(),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        

        $data = $request->only(['event_name', 'url', 'type']);
        
        if($request->hasFile('cover_image')){
            $cover_image = $request->file('cover_image');
            $data['cover_image'] = $filename = time() . '.' . $cover_image->getClientOriginalExtension();
            $cover_image->move(public_path().'/images/livestream/',$filename);
        }
        $livestream = new Livestream($data);
        if($livestream->save()){
            $notification = array(
                'message' => "Stream Added Successfully.",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
