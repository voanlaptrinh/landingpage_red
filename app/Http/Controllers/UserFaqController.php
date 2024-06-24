<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Question;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserFaqController extends Controller
{
    public function index(){
        $webConfig = Webconfig::find(1);
        $questions = Question::with('answers')->orderBy('order')->get();
        $news = News::orderBy('id', 'asc')->get();
        return view('user.faqs.index' ,compact('webConfig','questions', 'news'));
       }
}
