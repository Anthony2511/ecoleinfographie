<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use App\Models\Student;
use App\Models\Work;
use DB;
use SEO;

class PageController extends Controller
{
    public function home()
    {
        SEO::setTitle(trans('home.title'));
        SEO::setDescription(trans('home.metaDescription'));
        
        $news = News::published()->first();
        
        // Get the last article for each orientation
        $aWeb = Article::published()->where('orientation', 'web')->first();
        $a2d  = Article::published()->where('orientation', '2d')->first();
        $a3d  = Article::published()->where('orientation', '3d')->first();
        
        // Get a work for with a specific ID
        $wWeb = Work::where('id', 1)->first();
        $w2d  = Work::where('id', 4)->first();
        $w3d  = Work::where('id', 3)->first();
        
        // Get former studenst with interview with a specific ID
        $pWeb = Student::where('id', 153)->where('has_interview', true)->first();
        $p2d  = Student::where('id', 155)->where('has_interview', true)->first();
        $p3d  = Student::where('id', 154)->where('has_interview', true)->first();
        
        return view('pages.home', [
            'news'        => $news,
            'orientation' => $this->getOrientation(),
            'aWeb'        => $aWeb,
            'a2d'         => $a2d,
            'a3d'         => $a3d,
            'wWeb'        => $wWeb,
            'w2d'         => $w2d,
            'w3d'         => $w3d,
            'pWeb'        => $pWeb,
            'p2d'         => $p2d,
            'p3d'         => $p3d
        ]);
    }
    
    public function registration()
    {
        SEO::setTitle(trans('registration.button'));
        SEO::setDescription(trans('registration.metaDescription'));
        
        return view('pages.index_registration');
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
