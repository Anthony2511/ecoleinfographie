<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

use App\Models\News;
use SEO;

class NewsController extends Controller
{
    public function index()
    {
        SEO::setTitle('L’actualité');
        SEO::setDescription('Découvrez ce qu’il se passe à l’école et les prochains évènements.');
        
        $articles = News::published()
            ->where('featured', false)
            ->paginate(5);
        
        return view('pages.index_news', [
            'articleFeatured' => $this->getLastFeatured(),
            'articles' => $articles
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
