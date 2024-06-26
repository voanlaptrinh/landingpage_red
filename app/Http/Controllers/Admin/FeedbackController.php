<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $webConfig = Webconfig::find(1);
        $feedbacks = Feedback::orderBy('id', 'asc')->get();
        return view('admin.feedback.index', compact('webConfig', 'feedbacks'));
    }
    // FeedbackController.php
    public function toggleStatus($id)
    {
        $feedback = Feedback::find($id);
        if ($feedback) {
            $feedback->status = !$feedback->status;
            $feedback->save();
            return response()->json(['success' => true, 'status' => $feedback->status]);
        }
        return response()->json(['success' => false], 404);
    }
}
