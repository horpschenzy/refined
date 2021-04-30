<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller
{
    public function store(Request $request)
    {
        $validate  = Validator::make($request->all(), [
            'file_name' => 'required',
            'picture'=> 'file|image|mimes:jpeg,png,gif,webp',
        ]);
        if($validate->fails()){
            $notification = array(
                'message' => $validate->messages()->first(),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        

        $data = $request->only(['file_name', 'url', 'description']);
        
        if($request->hasFile('picture')){
            $picture = $request->file('picture');
            $data['picture'] = $filename = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path().'/images/resource/',$filename);
        }
        $resource = new Resource($data);
        if($resource->save()){
            $notification = array(
                'message' => "Resource Added Successfully.",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
