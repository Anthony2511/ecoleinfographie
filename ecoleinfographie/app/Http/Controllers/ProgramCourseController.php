<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Backpack\PageManager\app\Models\Page;

class ProgramCourseController extends PageController
{
    protected function showPageWeb()
    {
        $page = Page::findBySlug('programme-des-cours-web');
        
        $this->data['title'] = $page->title;
        $this->data['page']  = $page->withFakes();
        
        return view('pages.program_courses', [
            'getAllCoursesBloc1' => $this->getAllCoursesBloc1(),
            'getAllCoursesBloc2' => $this->getAllCoursesBloc2(),
            'getAllCoursesBloc3' => $this->getAllCoursesBloc3(),
            'getWebCoursesBloc1' => $this->getWebCoursesBloc1(),
            'getWebCoursesBloc2' => $this->getWebCoursesBloc2(),
            'getWebCoursesBloc3' => $this->getWebCoursesBloc3(),
        ], $this->data);
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
