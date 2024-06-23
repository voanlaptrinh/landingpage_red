<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserTeamController extends Controller
{
   public function index(){
    $webConfig = Webconfig::find(1);
    $teams = Team::all();
    return view('user.teams.index' ,compact('webConfig','teams'));
   }
}
