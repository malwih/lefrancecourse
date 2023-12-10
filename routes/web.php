<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

Route::get('/courses', [CourseController::class, 'index']);

// Halaman single course
Route::get('courses/{slug}', [CourseController::class, 'show']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
