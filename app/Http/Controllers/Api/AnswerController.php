<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function check(Request $request)
    {
        $questionId = $request->questionId;
        $selectedAnswer = $request->selectedAnswer;

        $isCorrect = false;

        return response()->json([
            'message' => $isCorrect ? 'Correct answer!' : 'Wrong answer!'
        ]);
    }
}
