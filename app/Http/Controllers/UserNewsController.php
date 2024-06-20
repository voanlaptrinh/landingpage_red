<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserNewsController extends Controller
{
    public function index(){
        $news = News::orderBy('id', 'asc')->paginate(6);
        return view('user.news.index', compact('news'));
    }
    public function detail($id)
    {
        $news = News::orderBy('id', 'asc')->get();
        $newsItem = News::findOrFail($id);
        $webConfig = Webconfig::find(1);
        $newsItem->content = $this->correctImagePaths($newsItem->content);
        return view('user.news.detail', compact('newsItem','webConfig','news'));
    }
    private function correctImagePaths($content)
    {
        return str_replace('../../uploads/', '/uploads/', $content);
    }
}
