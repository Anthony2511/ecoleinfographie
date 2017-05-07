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
        
        SEO::setTitle($teacher->title);
        SEO::setDescription('La page de ' . $teacher->title . ' ' . strtolower($teacher->role) . ' à la Haute École de la Province de Liège en infographie');
        
        return view('posts.postTeacher', [
            'teacher' => $teacher
        ]);
    }
    
    
}
