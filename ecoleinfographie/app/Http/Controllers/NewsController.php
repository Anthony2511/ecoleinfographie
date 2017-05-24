<?php

namespace App\Http\Controllers;

use App\Models\News;
use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;

class NewsController extends Controller
{
    public function index()
    {
        SEO::setTitle('L’actualité');
        SEO::setDescription('Découvrez ce qu’il se passe à l’école et les prochains évènements.');
    
        $articleFeaturedID = News::published()
                                 ->where('featured', true)
                                 ->first()->id;
        
        $articles = News::published()
                        ->where('id', '<>', $articleFeaturedID)
                        ->paginate(5);
        
        return view('pages.index_news', [
            'articleFeatured' => $this->getLastFeatured(),
            'articles'        => $articles
        ]);
    }
    
    public function show(News $article)
    {
        SEO::setTitle($article->title);
        SEO::setDescription($article->metadescription);
        SEOMeta::setKeywords($article->keywords);
        
        return view('posts.postNews', [
            'article' => $article
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
