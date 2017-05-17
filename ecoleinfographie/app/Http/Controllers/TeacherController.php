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
    
    protected function show(Teacher $teacher)
    {
        
        return view('posts.postTeacher', [
            'teacher' => $teacher,
            'imageProfile' => $teacher->getImageProfile('_profile.jpg'),
            'imageCard' => $teacher->getImageProfile('_card.jpg'),
            $this->setMetas($teacher),
            'orientation' => $this->getOrientation()
        ]);
    }
    
    protected function setMetas(Teacher $teacher)
    {
        SEO::setTitle($teacher->fullname);
        SEO::setDescription('La page de ' . $teacher->fullname . ' ' . strtolower($teacher->role) . ' à la Haute École de la Province de Liège en infographie');
    }
    
    public function getOrientation()
    {
        $orientations = [
            '2D'  => trans('programCourse.2D'),
            '3D'  => trans('programCourse.3D'),
            'web' => trans('programCourse.web')
        ];
        
        return $orientations;
    }
    
}
