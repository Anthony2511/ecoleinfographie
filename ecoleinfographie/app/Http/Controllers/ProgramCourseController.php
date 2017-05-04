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
            'courses' => $this->getAllCourses()
        ], $this->data);
    }
    
    public function getAllCourses()
    {
        $courses = Course::get();
        
        return $courses;
    }
}
