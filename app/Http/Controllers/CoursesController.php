<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function showCourses(Request $request)
    {
        $courses = Course::all();
        return view('classes.classes', compact('courses'));
    }

    public function showCourse($slug, $id)
    {
        $course = Course::where('slug', $slug)->where('id', $id)->firstOrFail();

        return view('classes.course', compact('course'));
    }
}
