<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
   public function index()
   {
      $webConfigs = Webconfig::find(1);
      return view('user.contact.index', compact('webConfigs'));
   }

   public function store(Request $request)
   {
      $request->validate(
         [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|integer'
         ],
         [
            'title.required' => 'Tiêu đề subcription là bắt buộc',
            'phone.required' => 'Số điện thoại là bắt buộc',
            'phone.integer' => 'Phải là dạng số',
            'title.max' => 'Tối đã 255 kí tự',
            'content.required' => 'Mô tả ngắn là bắt buộc',
            'email.required' => 'Email là bắt buộc',
           
         ]
      );

    
      Contact::create([
         'title' => $request->title,
         'content' => $request->content,
         'email' => $request->email,
         'phone' => $request->price,
      ]);

      return redirect()->route('contact.index')->with('success', 'Liên hệ của bạn đã được gửi thành công!');
   }
}
