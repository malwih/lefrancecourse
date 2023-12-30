<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class DashboardCourseController extends Controller
{

    // public function index()
    // {
    //     return view('dashboard.courses.index', [
    //         'courses' => Course::where('user_id', auth()->user()->id)->get()
    //     ]);
    // }

    //Menambah Fungsi untuk courses
    public function index()
    {
        $user = Auth::user();
        $courses = $user->courses; // Mengambil daftar course yang sudah diambil oleh user

        return view('dashboard.index', [
            'user' => $user,
            'courses' => $courses
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.courses.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:courses',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('course-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Course::create($validatedData);

        return redirect('/dashboard/courses')->with('success', 'New course has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('dashboard.courses.show', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('dashboard.courses.edit', [
            'course' => $course,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];


        if ($request->slug != $course->slug) {
            $rules['slug'] = 'required|unique:courses';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('course-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Course::where('id', $course->id)
            ->update($validatedData);

        return redirect('/dashboard/courses')->with('success', 'Course has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if ($course->image) {
            Storage::delete($course->image);
        }

        Course::destroy($course->id);

        return redirect('/dashboard/courses')->with('success', 'Course has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Course::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    // Course yang student yang aktif
    public function takeCourse(Request $request, Course $course)
    {
        $user = Auth::users();

        // Cek apakah user memiliki course aktif
        $activeCourses = $user->courses()->wherePivot('is_active', true)->get();

        if ($activeCourses->isNotEmpty()) {
            return redirect()->back()->with('error', 'Anda masih memiliki course yang aktif.');
        }

        // Ambil course
        $user->courses()->attach($course->id);

        return redirect()->back()->with('success', 'Course berhasil diambil.');
    }

    public function completeCourse(Request $request, Course $course)
    {
        $user = Auth::users();

        // Cek apakah user memiliki course yang diambil
        $takenCourses = $user->courses()->wherePivot('is_completed', false)->get();

        $isCourseTaken = $takenCourses->contains($course);

        if (!$isCourseTaken) {
            return redirect()->back()->with('error', 'Anda belum mengambil course ini.');
        }

        // Tandai course sebagai selesai
        $user->courses()->updateExistingPivot($course->id, ['is_completed' => true]);

        return redirect()->back()->with('success', 'Course berhasil diselesaikan.');
    }
}