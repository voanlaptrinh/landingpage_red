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
            'content' => 'string',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'title.required' => 'Tiêu đề tin tức là bắt buộc',
            'title.max' => 'Tối đã 255 kí tự',
            'description.required' => 'Mô tả ngắn là bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'images.image'=>'Phải bắt buộc là ảnh',
            'images.mimes'=>'Ảnh chỉ được là dạng jpeg, png, jpg, gif',
            'images.max' => 'Chỉ kích thước là 2M'
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
    public function edit($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->content = $this->correctImagePaths($newsItem->content);
        return view('admin.news.edit', compact('newsItem'));
    }
    private function correctImagePaths($content)
{
    return str_replace('../../uploads/', '/uploads/', $content);
}
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'string',
            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'title.required' => 'Tiêu đề tin tức là bắt buộc',
            'title.max' => 'Tối đã 255 kí tự',
            'description.required' => 'Mô tả ngắn là bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'images.image'=>'Phải bắt buộc là ảnh',
            'images.mimes'=>'Ảnh chỉ được là dạng jpeg, png, jpg, gif',
            'images.max' => 'Chỉ kích thước là 2M'
        ]);

        $newsItem = News::findOrFail($id);
        $imageName = $newsItem->images;

        if ($request->hasFile('images')) {
            $imageName = time() . '.' . $request->images->extension();
            $request->images->move(public_path('images'), $imageName);
        }

        $newsItem->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'images' => $imageName,
        ]);

        return redirect()->route('news.admin')->with('success', 'Tin tức đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        if (file_exists(public_path('images/' . $newsItem->images))) {
            unlink(public_path('images/' . $newsItem->images));
        }
        $newsItem->delete();

        return redirect()->route('news.admin')->with('success', 'Tin tức đã được xóa thành công!');
    }
    public function detail($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->content = $this->correctImagePaths($newsItem->content);
        return view('admin.news.detail', compact('newsItem'));
    }
}