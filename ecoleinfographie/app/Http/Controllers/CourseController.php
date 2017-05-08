<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use SEO;

class CourseController extends Controller
{
    protected function indexWeb()
    {
        SEO::setTitle('Le programme des cours en web');
        SEO::setDescription('Apprends en plus sur les cours que tu vas apprendre lors de ta formation en infographie dans l’option web');
        
        return view('pages.web.program', [
            'getAllCoursesBloc1' => $this->getAllCoursesBloc1(),
            'getAllCoursesBloc2' => $this->getAllCoursesBloc2(),
            'getAllCoursesBloc3' => $this->getAllCoursesBloc3(),
            'getWebCoursesBloc1' => $this->getWebCoursesBloc1(),
            'getWebCoursesBloc2' => $this->getWebCoursesBloc2(),
            'getWebCoursesBloc3' => $this->getWebCoursesBloc3(),
        ]);
    }
    
    protected function show($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
    
        SEO::setTitle($course->title);
        $orientation = ($course->orientation == 'Commun') ? '.' : ' dans l’orientation ' . $course->orientation . '.';
        SEO::setDescription('Le cours de ' . $course->title . ' est dispensé à la Haute École de la Province de Liège lors du bloc ' . $course->bloc . $orientation);
        
        
        return view('posts.postCourse', [
            'course' => $this->getOneCourse($slug)
        ]);
    }
    
    public function getOneCourse($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return $course;
    }
    
    /*
     * Queries for get all courses
     */
    
    protected function getAllCoursesBloc1()
    {
        $courses = Course::where('bloc', 1)
                         ->OrderBy('title', 'ASC')
                         ->get();
        
        return $courses;
    }
    
    protected function getAllCoursesBloc2()
    {
        $courses = Course::where('bloc', 2)
                         ->OrderBy('title', 'ASC')
                         ->get();
        
        return $courses;
    }
    
    protected function getAllCoursesBloc3()
    {
        $courses = Course::where('bloc', 3)
                         ->OrderBy('title', 'ASC')
                         ->get();
        
        return $courses;
    }
    
    /*
     * Queries for WEB options
     */
    
    protected function getWebCoursesBloc1()
    {
        $courses = Course::where('orientation', 'web')
                         ->where('bloc', '1')
                         ->OrderBy('title', 'ASC')
                         ->get();
        
        return $courses;
    }
    
    protected function getWebCoursesBloc2()
    {
        $courses = Course::where('orientation', 'web')
                         ->where('bloc', '2')
                         ->OrderBy('title', 'ASC')
                         ->get();
        
        return $courses;
    }
    
    protected function getWebCoursesBloc3()
    {
        $courses = Course::where('orientation', 'web')
                         ->where('bloc', '3')
                         ->OrderBy('title', 'ASC')
                         ->get();
        
        return $courses;
    }
}
