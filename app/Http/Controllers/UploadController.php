<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class UploadController extends Controller
{
    public function uploadImage(Request $request)
    {   
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('file');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        $location = asset('uploads/' . $filename);
        return response()->json(['location' => $location]);
    
    }
}
