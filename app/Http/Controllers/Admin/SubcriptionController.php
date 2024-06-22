<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcription;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class SubcriptionController extends Controller
{
    public function index()
    {
        $subcriptions = Subcription::all();
        $webConfig = Webconfig::find(1);
        return view('admin.subcription.index', compact('subcriptions','webConfig'));
    }
    public function create(Request $request)
    {
        $webConfig = Webconfig::find(1);
        return view('admin.subcription.create',compact('webConfig'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'string',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'integer'
        ],
        [
            'title.required' => 'Tiêu đề subcription là bắt buộc',
            'price' => 'Phải là dạng số',
            'title.max' => 'Tối đã 255 kí tự',
            'description.required' => 'Mô tả ngắn là bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'images.image'=>'Phải bắt buộc là ảnh',
            'images.mimes'=>'Ảnh chỉ được là dạng jpeg, png, jpg, gif',
            'images.max' => 'Chỉ kích thước là 2M'
        ]);

         // Handle image upload
    if ($request->hasFile('images')) {
        $imageName = time() . '.' . $request->images->extension(); // Generate unique image name
        $request->images->move(public_path('images'), $imageName); // Move the uploaded file to public/images directory
    } else {
        return redirect()->back()->withInput()->withErrors(['images' => 'Không tìm thấy tệp ảnh']); // Handle case where no image is uploaded
    }
        Subcription::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'images' => $imageName,
            'price' => $request->price,
        ]);

        return redirect()->route('subcription.admin')->with('success', 'Description đã được thêm mới thành công!');
    }




    public function edit($id)
    {
        $subcriptionItem = Subcription::findOrFail($id);
        $webConfig = Webconfig::find(1);
        $subcriptionItem->content = $this->correctImagePaths($subcriptionItem->content);
        return view('admin.subcription.edit', compact('subcriptionItem','webConfig'));
    }
    private function correctImagePaths($content)
{
    return str_replace('../../uploads/', '/uploads/', $content);
}
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'string',
            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
             'price' => 'integer'
        ],
        [
            'title.required' => 'Tiêu đề subcription là bắt buộc',
            'title.max' => 'Tối đã 255 kí tự',
            'description.required' => 'Mô tả ngắn là bắt buộc',
            'images.required' => 'Ảnh là bắt buộc',
            'images.image'=>'Phải bắt buộc là ảnh',
            'images.mimes'=>'Ảnh chỉ được là dạng jpeg, png, jpg, gif',
            'images.max' => 'Chỉ kích thước là 2M',
            'price' => 'Phải là dạng số',
        ]);

        $subcriptionItem = Subcription::findOrFail($id);
        $imageName = $subcriptionItem->images;

        if ($request->hasFile('images')) {
            $imageName = time() . '.' . $request->images->extension();
            $request->images->move(public_path('images'), $imageName);
        }

        $subcriptionItem->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'images' => $imageName,
            'price' => $request->price,
        ]);

        return redirect()->route('subcription.admin')->with('success', 'Subcription đã được cập nhật thành công!');
    }

    public function detail($id)
    {
        $subcriptionItem = Subcription::findOrFail($id);
        $webConfig = Webconfig::find(1);
        $subcriptionItem->content = $this->correctImagePaths($subcriptionItem->content);
        return view('admin.subcription.detail', compact('subcriptionItem','webConfig'));
    }
}
