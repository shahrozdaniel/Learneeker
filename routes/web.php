<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/course-details/{course}', CourseController::class . '@courseDetails')->name('course.details');
