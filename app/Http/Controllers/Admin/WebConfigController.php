<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class WebConfigController extends Controller
{
    public function index()
    {
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

        // Handle the logo file upload if a new logo is uploaded
        if ($request->hasFile('logo')) {
            // Validate the file (optional, but recommended)
            $request->validate([
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Generate a unique name for the image
            $imageName = time() . '.' . $request->logo->extension();

            // Move the image to the public/images directory
            $request->logo->move(public_path('images'), $imageName);

            // Save the image name to the webConfig
            $webConfig->logo = $imageName;
        }
        if ($request->hasFile('logoFooter')) {
      
            // Validate the file (optional, but recommended)
            $request->validate([
                'logoFooter' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Generate a unique name for the image
            $imageName = time() . '.' . $request->logoFooter->extension();

            // Move the image to the public/images directory
            $request->logoFooter->move(public_path('image'), $imageName);

            // Save the image name to the webConfig
            $webConfig->logoFooter = $imageName;
        }
        $webConfig->save();

        return redirect()->route('webconfig.admin')->with('success', 'Thông tin website đã được cập nhật thành công.');
    }
}
