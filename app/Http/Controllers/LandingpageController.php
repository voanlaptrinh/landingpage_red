<?php

namespace App\Http\Controllers;

use App\Models\Langdingpage;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index(){
        $landingpages = Langdingpage::where('status', 1)->get();
        return view('user.content.index', compact('landingpages'));
    }
 
}
