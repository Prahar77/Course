<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Course;

class HomeController extends Controller
{
    public function home(){
        $courses = Course::take(3)->get();
        $faculty = fksdjfs;
        return view('home',compact('courses','faculty'));
    }

    public function courseList(){
        $courses = Course::all();
        return view('courseList',compact('courses'));
    }
}
