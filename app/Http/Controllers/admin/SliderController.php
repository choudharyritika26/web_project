<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    Public function index()
    {
    return view ('admin.slider.form');
    }


//     public function store(Request $request)
//     {
//         $slider = new Slider;
//         $slider->title = $request->input('title');
//         $slider->description = $request->input('description');
//         if($request->hasfile('img'))
//         {
//             $file = $request->file('img');
//             $extention = $file->getClientOriginalExtension();
//             $filename = time().'.'.$extention;
//             $file->move('uploads/sliders/', $filename);
//             $slider->img = $filename;
//         }
//         $slider->save();
//         return redirect()->back()->with('status','slider Image Added Successfully');
//     }

public function store(Request $request)  
    {
//      $data = $request->validate([
//      'title' => 'required',
//      'content' => 'required',
//      'image' => 'required',    
//  ]);
 
 $slider = Slider::create([
    'title' => $request->input('title'), 
    'description' => $request->input('description'), 
    'img' => '',
 ]);
 
 
 if($request->has('img')) {
 
             $file = $request->file('img');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $slider->img = $filename;         
     }

    //  dd($request->all());
 
     $slider->save();
    return response()->json(['success'=>'Files uploaded successfully.']); 
    }

    public function show()
    {
        $slider = slider::all();
        return view('admin.slider.index', compact('slider'));
    }



 }
