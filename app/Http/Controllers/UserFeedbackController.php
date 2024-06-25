<?php

namespace App\Http\Controllers;

use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function index(){
        $webConfig = Webconfig::find(1);
        return view('user.feedback.index', compact('webConfig'));
    }
}
