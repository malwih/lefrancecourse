<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsDashboardController extends Controller
{
    public function index()
    {
        return view('index.blade.php');
    }
}
