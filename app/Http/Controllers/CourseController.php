<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses', [
            "title" => "Courses",
            "courses" => Course::all()
        ]);
    }

    public function show($slug)
    {
        return view('course', [
            "title" => "Single Course",
            "course" => Course::find($slug)
        ]);
    }
}
