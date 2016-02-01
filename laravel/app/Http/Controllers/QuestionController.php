<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Question;
use App\Http\Requests\QuestionRequest;


class QuestionController extends Controller
{
    function listQuestions()
    {
        $questions = Question::latest()->get();
        return view('pages/questions/list', compact('questions'));
    }

    function createQuestion(QuestionRequest $request)
    {
        // Double check to make sure the current user is authorized to do this...
        $this->authorize('create-question');

        $input = $request->all();
        $question = Question::create($input);

        $request->session()->flash('success', 'Your question has been created.');
        return redirect('/questions');
    }

    function createQuestionForm()
    {
        return view('pages/questions/create');
    }

    function editQuestion(QuestionRequest $request)
    {
        return "// todo";
    }

    function editQuestionForm()
    {
        return view('pages/questions/edit');
    }
}