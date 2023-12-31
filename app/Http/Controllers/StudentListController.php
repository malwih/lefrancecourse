<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;

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
    public function destroy(CourseUser $student)
    {
        // Hapus entri pada model CourseUser
        $student->delete();

        // Redirect atau kembali ke halaman yang sesuai setelah penghapusan
        return redirect('/dashboard/studentlist')->with('success', 'Student deleted successfully');
    }

    public function generatePDF()
    {
        $pdfOptions = new Options();
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($pdfOptions);

        // Mengambil semua pengguna beserta relasi courses yang aktif
        $students = User::whereHas('courses', function ($query) {
            $query->where('is_active', true);
        })->with('courses')->get();

        $html = '<h1>Student List</h1>';

        // Loop melalui setiap pengguna (user)
        foreach ($students as $student) {
            $html .= '<strong>Name:</strong> ' . $student->name . '<br>';
            $html .= '<strong>Email:</strong> ' . $student->email . '<br>';

            $html .= '<strong>Active Courses:</strong><br>';
            // Loop melalui setiap course aktif untuk pengguna saat ini
            foreach ($student->courses as $course) {
                if ($course->pivot->is_active) {
                    $html .= '- ' . $course->title . '<br>';
                }
            }
            $html .= '<br>';
        }

        $dompdf->loadHtml($html);

        // (Opsional) Atur ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (menghasilkan konten PDF)
        $dompdf->render();

        // Tampilkan atau unduh file PDF
        return $dompdf->stream("student_list.pdf");
        // Untuk menyimpan PDF secara langsung, gunakan:
        // return $dompdf->save("student_list.pdf");
    }
}
