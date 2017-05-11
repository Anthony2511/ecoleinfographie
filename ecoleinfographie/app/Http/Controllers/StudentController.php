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
    
    public function indexGraduated(Request $request)
    {
        SEO::setTitle('Nos diplômés');
        SEO::setDescription('Nous tenons une liste de tous les étudiants qui ont été diplômés à la Haute École de la Province de Liège');
        
        
        
        
        if ($request->get('request') == '3dvideo')
        {
            $students = Student::orderBy('year', 'desc')->where('orientation', '3D')->inRandomOrder()->paginate(12);
        } else
        {
            $students = Student::orderBy('year', 'desc')->inRandomOrder()->paginate(12);
        }
        
        
        
        /*$students = Student::orderBy('year', 'desc')->inRandomOrder()->paginate(12);*/
        
        if($request->ajax())
        {
            return [
                'students' => view('ajax.graduate',
                    [
                        'students' => $students,
                        'orientations' => $this->getOrientation()
                    ])->render(),
                'next_page' => $students->nextPageUrl() . '&request='. $request->get('request'),
            ];
            
        }
        
        return view('pages.graduate', [
            'students' => $students,
            'orientations' => $this->getOrientation()
        ]);
    }
    
    
    public function show(Student $student)
    {
    
        SEO::setTitle('Le parcours de ' . $student->fullname);
        SEO::setDescription( $student->fullname . ' est un ancien étudiant de la Haute École de la Province de Liège et a accepté de répondre à quelques questions sur son parcours professionnel');
        
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
