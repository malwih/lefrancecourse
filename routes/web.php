<?php

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\GoogleController;

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
        "active" => "home"
    ]);
});

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course:slug}', [CourseController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Course Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/courses/checkSlug', [DashboardCourseController::class, 'checkSlug'])
    ->middleware('auth');

//Menambah Router myprofile
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/myprofile', [MyProfileController::class, 'edit'])->name('myprofile.edit');
    Route::put('/dashboard/myprofile', [MyProfileController::class, 'update'])->name('myprofile.update');
});

Route::resource('/dashboard/courses', DashboardCourseController::class)
    ->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
