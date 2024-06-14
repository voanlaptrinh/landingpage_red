<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }
    public function create(Request $request)
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->images->extension();
        $request->images->move(public_path('images'), $imageName);

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'images' => $imageName,
        ]);

        return redirect()->route('news.admin')->with('success', 'Tin tức đã được thêm mới thành công!');
    }
}
