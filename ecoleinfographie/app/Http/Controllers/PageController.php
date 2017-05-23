<?php

namespace App\Http\Controllers;

use SEO;

class PageController extends Controller
{
	public function registration()
    {
        SEO::setTitle(trans('registration.button'));
        SEO::setDescription(trans('registration.metaDescription'));
        
        return view('pages.index_registration');
    }
    
    
    
    
}
