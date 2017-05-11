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
        
        
        /*switch ($request->get('request')){
            case '3dvideo':
                $students = Student::orderBy('year', 'desc')->where('orientation', '3D')->inRandomOrder()->paginate(12);
                break;
            case '2d':
                $students = Student::orderBy('year', 'desc')->where('orientation', '2D')->inRandomOrder()->paginate(12);
                break;
            case 'web':
                $students = Student::orderBy('year', 'desc')->where('orientation', 'web')->inRandomOrder()->paginate(12);
                break;
            case 'all':
                $students = Student::orderBy('year', 'desc')->inRandomOrder()->paginate(12);
                break;
            default:
                $students = Student::orderBy('year', 'desc')->inRandomOrder()->paginate(12);
                break;
        }*/
        
        /*$students = Student::query();
    
        if (in_array($request->request, ['3dvideo', '2d', 'web'])) {
            $students = $students->where('orientation', $request->request);
        }
    
        if ($request->has('year')) {
            $students = $students->where('year', $request->year);
        }
    
        $students = $students->latest('year')->inRandomOrder()->paginate(12);*/
        
        $query = Student::orderBy('year', 'desc')->inRandomOrder();
        
        if ($request->has('orientation')) {
            $query->where('orientation', $request->get('orientation'));
        }
        if ($request->has('year')) {
            $query->where('year', $request->get('year'));
        }
        
        $students = $query->paginate(12);
        
        
        if ($request->ajax()) {
            return [
                'students'  => view('ajax.graduate',
                    [
                        'students'     => $students,
                        'orientations' => $this->getOrientation()
                    ])->render(),
                'next_page' => $students->nextPageUrl() . '&orientation=' . $request->get('orientation'),
            ];
        }
        
        return view('pages.graduate', [
            'students'        => $students,
            'orientations'    => $this->getOrientation(),
            'getLoadMoreLink' => $this->getLoadMoreLink($request),
            'selectYear' => $this->selectYear()
        ]);
    }
    
    
    public function show(Student $student)
    {
        
        SEO::setTitle('Le parcours de ' . $student->fullname);
        SEO::setDescription($student->fullname . ' est un ancien étudiant de la Haute École de la Province de Liège et a accepté de répondre à quelques questions sur son parcours professionnel');
        
        return view('posts.postStudent', [
            'student'           => $student,
            'studentImageAside' => $student->getImageStudent('_aside.jpg'),
            'orientations'      => $this->getOrientation()
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
    
    public function getLoadMoreLink(Request $request)
    {
        if ($request->has('year') && ! $request->has('orientation')) {
            return '&year=' . $request->get('year');
        }
        
        if ($request->has('orientation') && ! $request->has('year')) {
            return '&orientation=' . $request->get('orientation');
        }
        
        if ($request->has('orientation') && $request->has('year')) {
            return '&year=' . $request->get('year') . '&orientation=' . $request->get('orientation');
        }
    }
    
    public function selectYear()
    {
        $selectYear = Student::select('year')->distinct()->orderBy('year', 'desc')->get();
        return $selectYear;
    }
    
    public function getStudentsWebWithInterview()
    {
        $students = Student::where('has_interview', 1)->where('orientation', 'web')->get();
        
        return $students;
    }
}
