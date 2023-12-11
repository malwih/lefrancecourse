<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;

class CourseController extends Controller
{
    public function index()
    {  
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('courses', [
            "title" => "All Course" . $title,
            "active" => 'courses',
            "courses" => Course::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Course $course)
    {
        return view('course', [
            "title" => "Single Course",
            "active" => 'courses',
            "course" => $course
        ]);
    }
}
