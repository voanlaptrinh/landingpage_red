<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Block;
use App\Models\Webconfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlockLandingController extends Controller
{
    public function index($id)
    {
        $block = Block::with('landingPage')->findOrFail($id);
        $webConfig = Webconfig::find(1);
        return view('admin.block.index', compact('block','webConfig'));
    }
    public function update(Request $request, $id)
    {
        $block = Block::findOrFail($id);


        // Validation có thể tùy chỉnh dựa trên yêu cầu của bạn
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'title1' => 'nullable|string|max:255',
            'title2' => 'nullable|string|max:255',
            'title3' => 'nullable|string|max:255',
            'title4' => 'nullable|string|max:255',
            'title5' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'description1' => 'nullable|string|max:255',
            'description2' => 'nullable|string|max:255',
            'description3' => 'nullable|string|max:255',
            'description4' => 'nullable|string|max:255',
            'description5' => 'nullable|string|max:255',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'nullable|string|max:255',
            'content1' => 'nullable|string|max:255',
            'content2' => 'nullable|string|max:255',
            'content3' => 'nullable|string|max:255',
            'content4' => 'nullable|string|max:255',
            'content5' => 'nullable|string|max:255',
            'json.*' => 'nullable|array',
            'json1.*' => 'nullable|array',
            'json2.*' => 'nullable|array',
            'json3.*' => 'nullable|array',
            'json4.*' => 'nullable|array',
            'json5.*' => 'nullable|array',
            'link' => 'nullable|string|max:255',
            'link1' => 'nullable|string|max:255',
            'link2' => 'nullable|string|max:255',
            'link3' => 'nullable|string|max:255',
            'link4' => 'nullable|string|max:255',
            'link5' => 'nullable|string|max:255',
            'landingpage_id' => 'required|exists:landingpages,id'
        ]);

        foreach (['images', 'images1', 'images2', 'images3', 'images4', 'images5'] as $imageField) {
            if ($request->hasFile($imageField)) {
                // Xóa ảnh cũ nếu có
                if ($block->$imageField) {
                    $oldImagePath = public_path($block->$imageField);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                // Lưu ảnh mới
                $imageName = time() . '_' . $imageField . '.' . $request->$imageField->extension();
                $request->$imageField->move(public_path('images'), $imageName);
                $data[$imageField] = 'images/' . $imageName;
            }
        }
        if ($request->has('json')) {
            foreach ($data['json'] as $index => $jsonData) {
                if (isset($jsonData['image']) && $jsonData['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $imageName = time() . '_' . $jsonData['image']->getClientOriginalName();
                    $imagePath = $jsonData['image']->move(public_path('images'), $imageName);
                    $data['json'][$index]['image'] = 'images/' . $imageName;
                } else {
                    // Giữ lại ảnh cũ nếu không có ảnh mới
                    if (isset($block->json[$index]['image'])) {
                        $data['json'][$index]['image'] = $block->json[$index]['image'];
                    }
                }
            }
        }
        if ($request->has('json1')) {
            foreach ($data['json1'] as $index => $jsonData) {
                if (isset($jsonData['image']) && $jsonData['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $imageName = time() . '_' . $jsonData['image']->getClientOriginalName();
                    $imagePath = $jsonData['image']->move(public_path('images'), $imageName);
                    $data['json1'][$index]['image'] = 'images/' . $imageName;
                } else {
                    // Giữ lại ảnh cũ nếu không có ảnh mới
                    if (isset($block->json[$index]['image'])) {
                        $data['json1'][$index]['image'] = $block->json[$index]['image'];
                    }
                }
            }
        }
        if ($request->has('json2')) {
            foreach ($data['json2'] as $index => $jsonData) {
                if (isset($jsonData['image']) && $jsonData['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $imageName = time() . '_' . $jsonData['image']->getClientOriginalName();
                    $imagePath = $jsonData['image']->move(public_path('images'), $imageName);
                    $data['json2'][$index]['image'] = 'images/' . $imageName;
                } else {
                    // Giữ lại ảnh cũ nếu không có ảnh mới
                    if (isset($block->json[$index]['image'])) {
                        $data['json2'][$index]['image'] = $block->json[$index]['image'];
                    }
                }
            }
        }
        if ($request->has('json3')) {
            foreach ($data['json3'] as $index => $jsonData) {
                if (isset($jsonData['image']) && $jsonData['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $imageName = time() . '_' . $jsonData['image']->getClientOriginalName();
                    $imagePath = $jsonData['image']->move(public_path('images'), $imageName);
                    $data['json3'][$index]['image'] = 'images/' . $imageName;
                } else {
                    // Giữ lại ảnh cũ nếu không có ảnh mới
                    if (isset($block->json[$index]['image'])) {
                        $data['json3'][$index]['image'] = $block->json[$index]['image'];
                    }
                }
            }
        }
        if ($request->has('json4')) {
            foreach ($data['json4'] as $index => $jsonData) {
                if (isset($jsonData['image']) && $jsonData['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $imageName = time() . '_' . $jsonData['image']->getClientOriginalName();
                    $imagePath = $jsonData['image']->move(public_path('images'), $imageName);
                    $data['json4'][$index]['image'] = 'images/' . $imageName;
                } else {
                    // Giữ lại ảnh cũ nếu không có ảnh mới
                    if (isset($block->json[$index]['image'])) {
                        $data['json4'][$index]['image'] = $block->json[$index]['image'];
                    }
                }
            }
        }
        if ($request->has('json5')) {
            foreach ($data['json5'] as $index => $jsonData) {
                if (isset($jsonData['image']) && $jsonData['image'] instanceof \Illuminate\Http\UploadedFile) {
                    $imageName = time() . '_' . $jsonData['image']->getClientOriginalName();
                    $imagePath = $jsonData['image']->move(public_path('images'), $imageName);
                    $data['json5'][$index]['image'] = 'images/' . $imageName;
                } else {
                    // Giữ lại ảnh cũ nếu không có ảnh mới
                    if (isset($block->json[$index]['image'])) {
                        $data['json5'][$index]['image'] = $block->json[$index]['image'];
                    }
                }
            }
        }

        $block->update($data);

        return redirect()->route('landingpage.admin')->with('success', 'Block updated successfully');
    }
}
