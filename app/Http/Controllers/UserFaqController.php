<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserFaqController extends Controller
{
    public function index(){
        $webConfig = Webconfig::find(1);
        $questions = Question::with('answers')->orderBy('order')->get();
        return view('user.faqs.index' ,compact('webConfig','questions'));
       }
}
