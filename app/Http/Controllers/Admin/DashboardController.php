<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Langdingpage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $landingpages = Langdingpage::all();
        return view('admin.content.index', compact('landingpages'));
    }
    public function toggleStatus(Request $request)
    {
        $landingPage = Langdingpage::find($request->id);
        if ($landingPage) {
            $landingPage->status = $request->status;
            $landingPage->save();
            return response()->json(['status' => 'success', 'message' => 'Trạng thái được cập nhật thành công!']);
        }
        return response()->json(['status' => 'error', 'message' => 'Landing page not found!']);
    }
    public function sort(Request $request)
    {
        $sortedIds = $request->input('sortedIds');
        foreach ($sortedIds as $index => $id) {
            Langdingpage::where('id', $id)->update(['order' => $index]);
        }

        return response()->json(['status' => 'success']);
    }
    public function updateImage(Request $request)
    {
        $id = $request->input('id');
        $landingPage = Langdingpage::find($id);
        if ($landingPage && $request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('image'), $filename);
            $landingPage->images = $filename;
            $landingPage->save();
        }

        return redirect()->back()->with('success', 'Image updated successfully!');
    }
}
