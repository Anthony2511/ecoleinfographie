<?php

namespace App\Http\Controllers;

use SEO;
use App\Models\News;

class PageController extends Controller
{
    public function home()
    {
        SEO::setTitle(trans('home.title'));
        SEO::setDescription(trans('home.metaDescription'));
        
        $news = News::published()->first();
        return view('pages.home', [
            'news' => $news
        ]);
    }
    
	public function registration()
    {
        SEO::setTitle(trans('registration.button'));
        SEO::setDescription(trans('registration.metaDescription'));
        
        return view('pages.index_registration');
    }
    
    
    
    
}
