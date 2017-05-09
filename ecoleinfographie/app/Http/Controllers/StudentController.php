<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use SEO;

class StudentController extends Controller
{
    public function indexWeb(Student $student)
    {
        SEO::setTitle('Le parcours des anciens diplômés en web');
        SEO::setDescription('Dans notre école, nous te formons à exercer un métier. Quoi de mieux que de te montrer une sélection de nos anciens bacheliers qui exercent aujourd’hui un métier dans le web.');
        
        return view('pages.web.parcours', [
            'getStudentsWebWithInterview' => $this->getStudentsWebWithInterview()
        ]);
    }
    
    public function show(Student $student)
    {
        return view('posts.postStudent', [
            'student' => $student,
            'studentImageAside' => $student->getImageStudent('_aside.jpg'),
            'orientations' => $this->getOrientation()
        ]);
    }
    
    public function getOrientation()
    {
        $orientations = [
            'all' => trans('programCourse.all'),
            '2D'  => trans('programCourse.2D'),
            '3D'  => trans('programCourse.3D'),
            'web' => trans('programCourse.web')
        ];
        
        return $orientations;
    }
    
    public function getStudentsWebWithInterview()
    {
        $students = Student::where('has_interview', 1)->where('orientation', 'web')->get();
        return $students;
    }
}
