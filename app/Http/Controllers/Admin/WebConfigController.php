<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class WebConfigController extends Controller
{
    public function index(){
        $webConfig = Webconfig::find(1);
        return view('admin.webconfig.index', compact('webConfig'));
    }
    public function update(Request $request)
    {
        $webConfig = Webconfig::find(1);
        $webConfig->title = $request->input('title');
        $webConfig->email = $request->input('email');
        $webConfig->phone = $request->input('phone');
        $webConfig->address = $request->input('address');
        $webConfig->description = $request->input('description');
        $webConfig->facebook = $request->input('facebook');
        $webConfig->youtube = $request->input('youtube');
        $webConfig->twitter = $request->input('twitter');
        $webConfig->telegram = $request->input('telegram');
        $webConfig->zalo = $request->input('zalo');

        // Xử lý lưu ảnh logo nếu được cập nhật
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $path = $logo->store('uploads', 'public'); // Lưu ảnh vào thư mục 'uploads' trong thư mục 'public'

            // Lấy đường dẫn tương đối của ảnh
            $webConfig->logo = '/storage/' . $path;
        }

        $webConfig->save();

        return redirect()->route('webconfig.admin')->with('success', 'Thông tin website đã được cập nhật thành công.');
    }
}
