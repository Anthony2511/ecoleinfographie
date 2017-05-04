<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Backpack\PageManager\app\Models\Page;

class ProgramCourseController extends PageController
{
    protected function showPageWeb()
    {
        $page = Page::findBySlug('programme-des-cours-web');
        if ( ! $page) {
            abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
        }
        
        $this->data['title'] = $page->title;
        $this->data['page']  = $page->withFakes();
        
        return view('pages.program_courses', [
            'allCourses' => $this->getAllCourses(),
            'webCourses' => $this->getWebCourses(),
        ], $this->data);
    }
    
    public function getAllCourses()
    {
        $courses = Course::get();
        
        return $courses;
    }
    
    public function getWebCourses()
    {
        $webCourses = Course::where('orientation', 'web')->OrderBy('name','ASC')->get();
        
        return $webCourses;
    }
}
