<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Webconfig;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $webConfig = Webconfig::find(1); // Retrieve the web configuration, adjust as necessary
        $questions = Question::with('answers')->orderBy('order')->get(); // Retrieve questions with answers
        return view('admin.faqs.index', compact('questions', 'webConfig'));
    }

    public function create()
    {
        $webConfig = Webconfig::find(1); // Retrieve the web configuration, adjust as necessary
        return view('admin.faqs.create', compact('webConfig'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answers.*' => 'required', // Validate each answer
        ]);

        $question = Question::create($request->only('question'));

        // Create answers for the question
        foreach ($request->answers as $answerText) {
            $question->answers()->create(['answer' => $answerText]);
        }

        return redirect()->route('faqs.admin');
    }

    public function edit($id)
    {
        $faq = Question::with('answers')->findOrFail($id);
        $webConfig = Webconfig::find(1); // Retrieve the web configuration, adjust as necessary
        return view('admin.faqs.edit', compact('faq', 'webConfig'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answers.*' => 'required', // Validate each answer
        ]);
    
        // Find the FAQ (Question) by ID
        $faq = Question::findOrFail($id);
    
        // Update the question
        $faq->update(['question' => $request->input('question')]);
    
        // Handle answers
        $updatedAnswers = [];
    
        // Update existing answers or mark them for deletion
        foreach ($request->answers as $answerId => $answerText) {
            if ($answerId && $existingAnswer = $faq->answers()->find($answerId)) {
                // Update existing answer
                $existingAnswer->update(['answer' => $answerText]);
                $updatedAnswers[] = $existingAnswer->id;
            } else {
                // Create new answer
                $newAnswer = $faq->answers()->create(['answer' => $answerText]);
                $updatedAnswers[] = $newAnswer->id;
            }
        }
    
        // Delete answers that are not in the updatedAnswers list
        $faq->answers()->whereNotIn('id', $updatedAnswers)->delete();
    
        return redirect()->route('faqs.admin');
    }
    
    public function destroy($id)
    {
        $faq = Question::findOrFail($id);
        $faq->answers()->delete(); // Delete associated answers
        $faq->delete(); // Delete the question itself
        return redirect()->route('faqs.admin');
    }

    public function reorder(Request $request)
    {
        $questionOrder = $request->input('question_order');
        foreach ($questionOrder as $order => $id) {
            Question::where('id', $id)->update(['order' => $order]);
        }

        $answerOrder = $request->input('answer_order');
        foreach ($answerOrder as $order => $id) {
            Answer::where('id', $id)->update(['order' => $order]);
        }

        return response()->json(['status' => 'success']);
    }
}
