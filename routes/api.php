<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnswerController;
use App\Http\Controllers\Api\QuizController;


Route::post('/check-answer', [AnswerController::class, 'check']);
Route::post('/quizzes/verify-answer', [QuizController::class, 'verifyAnswer']);