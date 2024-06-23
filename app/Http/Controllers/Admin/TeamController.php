<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $webConfig = Webconfig::find(1);
        $teams = Team::all();
        return view('admin.teams.index', compact('webConfig','teams'));
    }
    public function create()
    {
        $webConfig = Webconfig::find(1);
        return view('admin.teams.create', compact('webConfig'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'images' => 'nullable|image|max:2048', // Validate image file, max 2MB
            'category' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'content' => 'nullable|string',
        ], [
            'name.required' => 'Tên là bắt buộc',
            'name.max' => 'Tối đa 255 kí tự',
            'category.required' => 'Vai trò là bắt buộc',
            'category.max' => 'Vai trò tối đa 255 kí tự',
            'address.required' => 'Địa chỉ là bắt buộc',
            'address.max' => 'Tối đa 255 kí tự',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 kí tự',
            'phone.max' => 'Số điện thoại không được vượt quá 15 kí tự',
            'images.max' => 'Tối đa là 2MB'
        ]);

        // Handle file upload (if image is uploaded)
        $imageName = null;
        if ($request->hasFile('images')) {
            $imageName = time() . '.' . $request->file('images')->getClientOriginalExtension();
            $request->file('images')->move(public_path('uploads'), $imageName);
        }

        // Create new record in database
        Team::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'images' => $imageName,
            'category' => $request->input('category'),
            'address' => $request->input('address'),
            'content' => $request->input('content'),
        ]);

        // Redirect back or wherever you need
        return redirect()->route('team.admin')->with('success', 'Thêm mới thành viên thành công!');
    }
    public function edit($id)
    {
        $teamItem = Team::findOrFail($id);
        $webConfig = Webconfig::find(1);
        $teamItem->content = $this->correctImagePaths($teamItem->content);
        return view('admin.teams.edit', compact('teamItem','webConfig'));
    }
    private function correctImagePaths($content)
    {
        return str_replace('../../uploads/', '/uploads/', $content);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'images' => 'nullable|image|max:2048', // Validate image file, max 2MB
            'category' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'content' => 'nullable|string',
        ], [
            'name.required' => 'Tên là bắt buộc',
            'name.max' => 'Tối đa 255 kí tự',
            'category.required' => 'Vai trò là bắt buộc',
            'category.max' => 'Vai trò tối đa 255 kí tự',
            'address.required' => 'Địa chỉ là bắt buộc',
            'address.max' => 'Tối đa 255 kí tự',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 kí tự',
            'phone.max' => 'Số điện thoại không được vượt quá 15 kí tự',
            'images.max' => 'Tối đa là 2MB'
        ]);

        $teamItem = Team::findOrFail($id);
        $imageName = $teamItem->images;

        if ($request->hasFile('images')) {
            $imageName = time() . '.' . $request->images->extension();
            $request->images->move(public_path('uploads'), $imageName);
        }

        $teamItem->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'content' => $request->content,
            'images' => $imageName,
            'address' => $request->address,
            'category' => $request->category,
        ]);

        return redirect()->route('team.admin')->with('success', 'Thành viên đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $teamItem = Team::findOrFail($id);
        if (file_exists(public_path('uploads/' . $teamItem->images))) {
            unlink(public_path('uploads/' . $teamItem->images));
        }
        $teamItem->delete();

        return redirect()->route('team.admin')->with('success', 'Thành viên đã được xóa thành công!');
    }
}
