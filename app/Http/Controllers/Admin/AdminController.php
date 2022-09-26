<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Course;
use App\Http\Requests\StoreCourseDetailsRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->get();
        return view('Admin.list',compact('courses'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Admin.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseDetailsRequest $request)
    {
    //     $request->validate([
    //         'coursename' => 'required',
    //         'price' => 'numeric',
    //         'credit' => 'required',
    //         'type' => 'required',
    //         'duration' => 'required',
    //         'requirement' => 'required',
    //         'description' => 'required'
    //     ],
    //     [
    //         'coursename.required' => 'Please enter the course name',
    //         'price.required' => 'Please enter the price'
    //     ]
    // );

        Course::create([
            'coursename'    => $request->coursename,
            'price'         => $request->price,
            'credit'        => $request->credit,
            'type'          => $request->type,
            'duration'      =>$request->duration,
            'requirement'   =>$request->requirement,
            'description'   =>$request->description,

        ]);
        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view ('detail',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->update([
            'coursename' => $request->coursename,
            'price' => $request->price,
            'credit' => $request->credit,
            'type' => $request->type,
            'duration' =>$request->duration,
            'requirement' =>$request->requirement,
            'description' =>$request->description,
        ]);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('index');
    }
}
