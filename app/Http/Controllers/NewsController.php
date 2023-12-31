<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news', [
            "title" => "All News",
            "active" => 'news',
            "news" => News::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(News $news)
    {
        return view('new', [
            "title" => "$news->title",
            "active" => 'news',
            "news" => $news
        ]);
    }
}
