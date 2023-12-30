<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class NewsDashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $courses = $user->courses; // Mengambil daftar course yang sudah diambil oleh user

        return view('Dashboard.news.index', [
            'user' => $user,
            'courses' => $courses
        ]);
    }
}
