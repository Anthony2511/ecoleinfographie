<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use SEO;

class TeacherController extends Controller
{
    protected function index()
    {
        
    }
    
    protected function show($slug)
    {
        $teacher = Teacher::where('slug', $slug)->firstOrFail();
        
        SEO::setTitle($teacher->fullname);
        SEO::setDescription('La page de ' . $teacher->fullname . ' ' . strtolower($teacher->role) . ' à la Haute École de la Province de Liège en infographie');
        
        return view('posts.postTeacher', [
            'teacher' => $teacher,
        ]);
    }
}
