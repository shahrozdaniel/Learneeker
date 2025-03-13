<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
	public function courseDetails($course)
	{
		return view('course_details', compact('course'));
	}
}
