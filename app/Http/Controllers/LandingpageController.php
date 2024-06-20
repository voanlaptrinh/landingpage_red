<?php

namespace App\Http\Controllers;

use App\Models\Langdingpage;
use App\Models\News;
use App\Models\Subcription;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index(){
        $landingpages = Langdingpage::where('status', 1)->orderBy('order', 'asc')->get();
        $news = News::orderBy('id', 'asc')->get();
        $webConfig = Webconfig::find(1);
        
        $subcriptions = Subcription::orderBy('id', 'asc')->get();
        return view('user.block.index', compact('landingpages','news','subcriptions'));
    }
 
}
