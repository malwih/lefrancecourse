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

    public function index()
    {
        return view('dashboard.courses.index', [
            'courses' => Course::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function dashboard()
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
        // Tidak perlu lagi melewati informasi kategori ke view
        return view('dashboard.courses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:courses',
            'price' => 'required',
            'term' => 'required|max:255',
            'schedule' => 'required',
            'image' => 'image|file|max:51200',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('course-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Course::create($validatedData);

        return redirect('/dashboard/courses')->with('success', 'New course has been added!');
    }

    public function show(Course $course)
    {
        return view('dashboard.courses.show', [
            'course' => $course
        ]);
    }

    public function edit(Course $course)
    {
        return view('dashboard.courses.edit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if ($request->slug != $course->slug) {
            $rules['slug'] = 'required|unique:courses';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            // Sesuaikan pengelolaan gambar sesuai kebutuhan Anda
            // Jangan lupa untuk menghapus gambar yang lama jika diperlukan
            // Contoh: Storage::delete($course->image);
            $validatedData['image'] = $request->file('image')->store('course-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        $course->update($validatedData);

        return redirect('/dashboard/courses')->with('success', 'Course has been updated!');
    }

    public function destroy(Course $course)
    {
        // Sesuaikan penghapusan file gambar jika diperlukan
        // Contoh: if ($course->image) { Storage::delete($course->image); }

        $course->delete();

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