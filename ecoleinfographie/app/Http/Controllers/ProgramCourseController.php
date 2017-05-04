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
            'getWebCoursesBloc1' => $this->getWebCoursesBloc1(),
        ], $this->data);
    }
    
    public function getAllCoursesBloc1()
    {
        $courses = Course::where('bloc', 1)
            ->OrderBy('name', 'ASC')
            ->get();
        
        return $courses;
    }
    
    protected function getWebCoursesBloc1()
    {
        $courses = Course::where('orientation', 'web')
            ->where('bloc', '1')
            ->OrderBy('name', 'ASC')
            ->get();
        
        return $courses;
    }
}
