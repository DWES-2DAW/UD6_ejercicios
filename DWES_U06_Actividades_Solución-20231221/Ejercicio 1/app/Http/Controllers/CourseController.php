<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $courses = Course::all();
        return view('inicio')->with('courses', $courses);
    }
}
