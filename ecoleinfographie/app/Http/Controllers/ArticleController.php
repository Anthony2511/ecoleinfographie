<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use SEO;


class ArticleController extends Controller
{
    protected function index()
    {
        SEO::setTitle('Le blog de l’infographie');
        SEO::setDescription('Découvres des articles sur l’infographie, sur le web, la réalisation 3D et vidéographique ainsi que sur le design graphique');
        
        
        $articles = Article::published()->paginate(8);
        
        return view('pages.blog', [
            'articles' => $articles,
            'orientation' => $this->getOrientation()
        ]);
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
