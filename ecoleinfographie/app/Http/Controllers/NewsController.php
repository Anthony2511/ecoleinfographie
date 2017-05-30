<?php

namespace App\Http\Controllers;

use App\Models\News;
use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;
use App\Models\Request;

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
    
        SEO::OpenGraph()->addProperty('type', 'article');
        SEO::OpenGraph()->addImage($article->image, ['width' => \Image::make($article->image)->width(), 'height' => \Image::make($article->image)->height()]);
        
        $comments         = $article->commentNews()->paginate(12);
        $numberOfComments = $article->commentNews()->count();
        
        return view('posts.postNews', [
            'article'          => $article,
            'comments'         => $comments,
            'numberOfComments' => $numberOfComments,
        ]);
    }
    
    public function getLastFeatured()
    {
        $articleFeatured = News::published()
                               ->where('featured', true)
                               ->first();
        
        return $articleFeatured;
    }
    
    public function setValueCommentForm($data)
    {
        if (Request::old($data) && Cookie::get($data) == null)
        {
            echo Request::old($data);
        } elseif (Cookie::get($data) !== null){
            echo Request::cookie($data);
        }
    }
    
}
