<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Models\User;

class StudentListController extends Controller
{
    public function index()
    {
        // Ambil semua data siswa beserta relasi courses
        $students = User::whereHas('courses')->get();

        return view('dashboard.studentlist.index', [
            'students' => $students
        ]);
    }

    // Mengedit Student
    public function edit(CourseUser $student)
    {
        $courses = $student->courses()->wherePivot('is_active', true)->get();

        return view('dashboard.studentlist.edit', [
            'student' => $student,
            'courses' => $courses,
        ]);
    }

    // Menghapus Student
    public function destroy(CourseUser $courseuser)
    {
        // Hapus entri pada model CourseUser
        $courseuser->delete();

        // Redirect atau kembali ke halaman yang sesuai setelah penghapusan
        return redirect('/dashboard/studentlist')->with('success', 'Student deleted successfully');
    }
}
