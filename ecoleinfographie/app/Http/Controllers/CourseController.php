<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    protected function show($slug)
    {
        Course::where('slug', $slug)->firstOrFail();
        return view('pages.temp_page_course', [
            'pages' => $this->course(),
        ]);
    }
    
    public function course()
    {
        $page = Course::select()->get();
        return $page;
    }
}
