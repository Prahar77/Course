<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Course;

class UserController extends Controller
{
    public function index()
    {
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        $courses = Course::latest()->get();
        return view('Frontend.Courses.home',compact('courses'));

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
        return view ('Frontend.Courses.detail',compact('course'));
    }

}
