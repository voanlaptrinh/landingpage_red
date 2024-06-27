<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class InfomationController extends Controller
{
  public function index(){
    $webConfig = Webconfig::find(1);
    return view('admin.infomation.index', compact('webConfig'));
  }
}
