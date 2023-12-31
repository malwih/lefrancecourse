<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseUser;
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
        $news = $user->news;
        $courses = $user->courses; // Mengambil daftar course yang sudah diambil oleh user

        return view('dashboard.index', [
            'user' => $user,
            'courses' => $courses,
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

        return redirect('/dashboard/courses')->with('success', 'New class has been added!');
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
            'image' => 'image|file|max:51200',
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

        return redirect('/dashboard/courses')->with('success', 'Class has been updated!');
    }

    public function destroy(Course $course)
    {
        // Sesuaikan penghapusan file gambar jika diperlukan
        // Contoh: if ($course->image) { Storage::delete($course->image); }

        $course->delete();

        return redirect('/dashboard/courses')->with('success', 'Class has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Course::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    // public function addcourse(Course $course)
    // {
    //     return view('dashboard.addcourse', [
    //         'course' => $course
    //     ]);
    // }

    public function addcourse()
    {
        $courses = Course::all();

        return view('dashboard.addcourse', [
            'courses' => $courses
        ]);
    }

    public function takeCourse(Request $request)
    {
        $validatedData = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'schedule' => 'required',
            'price' => 'required',
        ]);

        $user = auth()->user();

        // Periksa apakah pengguna memiliki kursus yang aktif pada CourseUser
        $activeCourse = CourseUser::where('user_id', $user->id)
            ->where('is_active', true)
            ->first();

        if ($activeCourse) {
            return back()->with('error', 'Anda masih memiliki kursus yang aktif lainnya.');
        }

        // Simpan data ke pivot table course_user
        $courseUser = CourseUser::create([
            'course_id' => $validatedData['course_id'],
            'user_id' => $user->id,
            'is_active' => true,
            'is_completed' => false,
        ]);

        if ($courseUser) {
            return redirect()->route('dashboard')->with('success', 'Course added successfully.');
        } else {
            return back()->with('error', 'Failed to add course.');
        }
    }


    public function storeCourse(Request $request)
    {
        $validatedData = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'schedule' => 'required',
            'price' => 'required',
        ]);

        $user = auth()->user();

        // Simpan data ke pivot table course_user
        $courseUser = CourseUser::create([
            'course_id' => $validatedData['course_id'],
            'user_id' => $user->id,
            'is_active' => true, // Atur status aktif ke true jika baru ditambahkan
            'is_completed' => false, // Default nilai is_completed ke false
            // ... (menambahkan field lainnya)
        ]);

        if ($courseUser) {
            return back()->with('success', 'Course added successfully.');
        } else {
            return back()->with('error', 'Failed to add course.');
        }
    }
}
