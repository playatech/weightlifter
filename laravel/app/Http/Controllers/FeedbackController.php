<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\Question;

use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    // Function to display a form when creating new feedback
    function createFeedbackForm(Application $application, Question $question)
    {
        // Generate an array of answers based on their associated question ID
        $answers = [];
        
        foreach($application->answers as $answer)
        {
            $answers[$answer->question_id] = $answer;
        }
        
        return view('pages/feedback/create', compact('application', 'question', 'answers'));
    }

    // Function for creating new feedback (post request)
    function createFeedback(FeedbackRequest $request)
    {
        // Double check to make sure the current user is authorized to do this...
        $this->authorize('create-feedback');

        // Check application ID
        // Check regarding ID / type
        // Create new feedback
        // Notify user

        return "// todo";
    }
}
