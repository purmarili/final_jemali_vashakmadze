<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function verifyAnswer(Request $request)
    {
        $questionId = $request->questionId;
        $selectedAnswer = $request->selectedAnswer;

        $question = Question::with('answers')->findOrFail($questionId);

        $isCorrect = $question->answers->some(function ($answer) {
            return $answer->content == $selectedAnswer && $answer->is_correct;
        });

        return response()->json([
            'isCorrect' => $isCorrect,
            'correctAnswer' => $question->answers->firstWhere('is_correct')->content
        ]);
    }
}
