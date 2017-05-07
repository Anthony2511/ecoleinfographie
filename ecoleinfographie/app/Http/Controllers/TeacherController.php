<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use SEO;

class TeacherController extends Controller
{
    protected function index()
    {
        
    }
    
    protected function show($slug)
    {
        $teacher = Teacher::where('slug', $slug)->firstOrFail();
        return view('posts.postTeacher', [
            'teacher' => $teacher
        ]);
    }
}
