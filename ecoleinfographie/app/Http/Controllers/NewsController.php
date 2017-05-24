<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use SEO;

class NewsController extends Controller
{
    public function index()
    {
        SEO::setTitle('L’actualité');
        SEO::setDescription('Découvrez ce qu’il se passe à l’école et les prochains évènements.');
        return view('pages.index_news', [
            'articleFeatured' => $this->getLastFeatured()
        ]);
    }
    
    public function getLastFeatured()
    {
        $articleFeatured = News::published()
            ->where('featured', true)
            ->first();
        
        return $articleFeatured;
    }
    
}
