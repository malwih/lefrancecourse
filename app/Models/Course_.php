<?php

namespace App\Models;

class Course
{
    private static $blog_courses = [
        [
            "title" => "Kelas Dewasa",
            "slug" => "kelas-dewasa",
            "body" => "Kelas Dewasa ditujukan untuk publik mulai usia 15
            tahun keatas. Anda akan mempelajari bahasa Prancis umum pada setiap aspeknya, lisan dan tulisan,
            dengan menggunakan buku Tendances."
        ],
        [
            "title" => "Kelas Remaja",
            "slug" => "kelas-remaja",
            "body" => "Kelas anak ditujukan untuk siswa yang duduk di sekolah
            dasar (SD) sedangkan kelas remaja ditujukan untuk siswa yang duduk di sekolah menengah pertama
            (SMP)."
        ],
        [
            "title" => "Kelas Akselerasi",
            "slug" => "kelas-akselerasi",
            "body" => "Kelas ini dirancang khusus untuk Anda yang ingin
            menyelesaikan pembelajaran dalam waktu singkat."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_courses);
    }

    public static function find($slug)
    {
        $courses = static::all();
        return $courses->firstWhere('slug', $slug);
    }
}
