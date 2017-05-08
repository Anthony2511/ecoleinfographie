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
            'imageProfile' => $this->getImageProfile($slug)
        ]);
    }
    
    public function getImageProfile($slug)
    {
        $teacher = Teacher::where('slug', $slug)->firstOrFail();
        
        $basePath = 'uploads/teachers/';
        $fullname = pathinfo($teacher->picture, PATHINFO_FILENAME);
        $imageProfile = $basePath . $fullname . '_profile.jpg';
    
        if (file_exists($imageProfile)) {
            return URL('/') . '/' . $imageProfile;
        } else {
            return $imageProfile = URL('/') . '/img/no-avatar.jpg';
        }
    }
}
