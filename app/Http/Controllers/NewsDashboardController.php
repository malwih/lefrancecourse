<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class NewsDashboardController extends Controller
{

    public function index(Request $request)
    {
        $sort = $request->query('sort') == 'desc' ? 'desc' : 'asc';
    $search = $request->query('search');

    $news = News::where('user_id', auth()->user()->id)
        ->when($search, function ($query) use ($search) {
            return $query->where('title', 'like', '%' . $search . '%');
        })
        ->orderBy('title', $sort)
        ->get();

    return view('dashboard.news.index', compact('news'));

    }

    public function dashboard()
    {
        $user = Auth::user();
        $news = $user->news; // Mengambil daftar course yang sudah diambil oleh user

        return view('dashboard.index', [
            'user' => $user,
            'news' => $news,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        // Tidak perlu lagi melewati informasi kategori ke view
        return view('dashboard.news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:courses',
            'image' => 'image|file|max:51200',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('course-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        News::create($validatedData);

        return redirect('/dashboard/news')->with('success', 'News has been added!');
    }

    public function show(News $news)
    {
        return view('dashboard.news.show', [
            'news' => $news
        ]);
    }

    public function edit(News $news)
    {
        return view('dashboard.news.edit', [
            'news' => $news
        ]);
    }

    public function update(Request $request, News $news)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:51200',
            'body' => 'required'
        ];

        if ($request->slug != $news->slug) {
            $rules['slug'] = 'required|unique:news';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            // Sesuaikan pengelolaan gambar sesuai kebutuhan Anda
            // Jangan lupa untuk menghapus gambar yang lama jika diperlukan
            // Contoh: Storage::delete($course->image);
            $validatedData['image'] = $request->file('image')->store('course-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        $news->update($validatedData);

        return redirect('/dashboard/news')->with('success', 'News has been updated!');
    }

    public function destroy(News $news)
    {
        // Sesuaikan penghapusan file gambar jika diperlukan
        // Contoh: if ($course->image) { Storage::delete($course->image); }

        $news->delete();

        return redirect('/dashboard/news')->with('success', 'News has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
