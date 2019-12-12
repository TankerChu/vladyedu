<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class FrontendController extends Controller
{
    public function index()
    {
        $featured = Course::where('is_featured', 1)->get();

        return view('index', compact('featured'));
    }
}
