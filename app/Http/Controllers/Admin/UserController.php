<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
