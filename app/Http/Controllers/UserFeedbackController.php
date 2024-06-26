<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function index()
    {
        $webConfig = Webconfig::find(1);
        $feedbacks = Feedback::where('status',1)->orderBy('id', 'asc')->paginate(10);
        return view('user.feedback.index', compact('webConfig','feedbacks'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|string|email',
                'content' => 'required|string|max:255'
            ],
            [

                'email.required' => 'Email là bắt buộc',
                'email.email' => 'Email không hợp lệ',
                'content.required' => 'Nội dung là bắt buộc',
                'content.max' => 'Nội dung tối đa 255 kí tự',
            ]
        );



        Feedback::create([
            'email' => $request->email,
            'status' => 0,
            'content' => $request->content
        ]);

        return redirect()->route('feedback.index')->with('success', 'Feedback của bạn đã được gửi thành công!');
    }
}
