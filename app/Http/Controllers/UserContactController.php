<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MailContact;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
   public function index()
   {
      $webConfig = Webconfig::find(1);
      return view('user.contact.index', compact('webConfig'));
   }
  

   public function store(Request $request)
   {
      $request->validate(
         [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15'
         ],
         [
            'title.required' => 'Tiêu đề subcription là bắt buộc',
            'phone.required' => 'Số điện thoại là bắt buộc',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 kí tự',
            'phone.max' => 'Số điện thoại không được vượt quá 15 kí tự',
            'title.max' => 'Tối đã 255 kí tự',
            'content.required' => 'Mô tả ngắn là bắt buộc',
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không hợp lệ',
         ]
      );



      Contact::create([
         'title' => $request->title,
         'content' => $request->content,
         'email' => $request->email,
         'phone' => $request->phone,
      ]);

      return redirect()->route('contact.index')->with('success', 'Liên hệ của bạn đã được gửi thành công!');
   }

   public function Emailstore(Request $request)
   {
      $request->validate(
         [
            'email' => 'required|string|email',
         ],
         [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không hợp lệ',
         ]
      );
      MailContact::create([
         'email' => $request->email,
      ]);
      return redirect()->back()->with('success', 'Email của bạn đã được gửi thành công!');
   }
   
}
