<?php

namespace App\Http\Controllers;

use SEO;
use App\Models\News;
use App\Models\Article;
use DB;

class PageController extends Controller
{
    public function home()
    {
        SEO::setTitle(trans('home.title'));
        SEO::setDescription(trans('home.metaDescription'));
        
        $news = News::published()->first();
        $aWeb = Article::published()->where('orientation', 'web')->first();
        $a2d = Article::published()->where('orientation', '2d')->first();
        $a3d = Article::published()->where('orientation', '3d')->first();
    
        return view('pages.home', [
            'news' => $news,
            'orientation' => $this->getOrientation(),
            'aWeb' => $aWeb,
            'a2d' => $a2d,
            'a3d' => $a3d
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
