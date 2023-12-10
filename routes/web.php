<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/courses', function () {
    $blog_courses = [
        [
            "title" => "Kelas Dewasa",
            "slug" => "kelas-dewasa",
            "body" => "Kelas Dewasa ditujukan untuk publik mulai usia 15
            tahun keatas. Anda akan mempelajari bahasa Prancis umum pada setiap aspeknya, lisan dan tulisan,
            dengan menggunakan buku Tendances."
        ]
    ];
    return view('courses', [
        "title" => "Courses",
        "courses" => $blog_courses
    ]);
});

// Halaman single course
Route::get('courses/{slug}', function($slug) {
    $blog_courses = [
        [
            "title" => "Kelas Dewasa",
            "slug" => "kelas-dewasa",
            "body" => "Kelas Dewasa ditujukan untuk publik mulai usia 15
            tahun keatas. Anda akan mempelajari bahasa Prancis umum pada setiap aspeknya, lisan dan tulisan,
            dengan menggunakan buku Tendances."
        ]
    ];

    $new_course = [];
    foreach($blog_courses as $course) {
        if($course["slug"] === $slug) {
            $new_course = $course;
        }
    }
    return view('course', [
        "title" => "Single Course",
        "course" => $new_course
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
