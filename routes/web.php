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
use App\Http\Controllers\NewsDashboardController;
use App\Http\Controllers\StudentListController;
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

Route::get('/courses', [CourseController::class, 'index'], [NewsDashboardController::class]);
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

// Modifikasi tampilan dashboard
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardCourseController::class, 'dashboard'])->name('dashboard');
    // Courses
    Route::get('/course/{id}/take', [CourseController::class, 'take'])->name('course.take');
    Route::get('/course/{id}/complete', [CourseController::class, 'complete'])->name('course.complete');

    Route::post('/dashboard/addcourse', [DashboardCourseController::class, 'storeCourse'])->name('courses.take');
});

//Menambah Route myprofile
// Route Edit Profile
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/editprofile', [MyProfileController::class, 'edit'])->name('editprofile.edit');
    Route::put('/dashboard/editprofile', [MyProfileController::class, 'update'])->name('editprofile.update');
    Route::get('/dashboard/myprofile', [MyProfileController::class, 'index'])->name('index');
    Route::get('/dashboard/addcourse', [DashboardCourseController::class, 'addcourse'])->name('addcourse');
    Route::post('/courses/take', [DashboardCourseController::class, 'takeCourse'])->name('courses.take');
    Route::post('/dashboard/addcourse', [DashboardCourseController::class, 'takeCourse'])->name('courses.take');
});

// Route::get('/dashboard/courses/checkSlug',[DashboardCourseController::class, 'checkSlug'])
// -> middleware('auth');

Route::resource('/dashboard/courses', DashboardCourseController::class)
    ->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/news', NewsDashboardController::class)->middleware('auth');
Route::resource('/dashboard/studentlist', StudentListController::class)->middleware('auth');

Route::get('/dashboard/studentlist', [StudentListController::class, 'index'])->name('studentlist.index');
Route::get('/dashboard/studentlist/{student}/edit', [StudentListController::class, 'edit'])->name('studentlist.edit');
Route::delete('/dashboard/studentlist/{courseuser}', [StudentListController::class, 'destroy'])->name('studentlist.destroy');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// pdf reporting
Route::get('/dashboard/studentlist/pdf', [StudentListController::class, 'generatePDF'])->name('studentlist.pdf');
