<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Block;
use Illuminate\Http\Request;

class BlockLandingController extends Controller
{
    public function index($id){
           $blocks = Block::with('landingPage')->findOrFail($id);
           return view('admin.block.index', compact('blocks'));
    }
}
