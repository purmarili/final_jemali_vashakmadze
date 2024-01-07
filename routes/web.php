<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;

// Homepage route
Route::get('/', function () {
    return view('welcome');
});

// Quiz routes
Route::resource('quizzes', QuizController::class);

// Question routes
Route::resource('questions', QuestionController::class);
