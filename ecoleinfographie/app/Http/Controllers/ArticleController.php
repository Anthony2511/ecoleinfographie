<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use SEO;

class ArticleController extends Controller
{
    protected function index(Article $article)
    {
        SEO::setTitle('Le blog de l’infographie');
        SEO::setDescription('Découvres des articles sur l’infographie, sur le web, la réalisation 3D et vidéographique ainsi que sur le design graphique');
        
        return view('pages.blog');
    }
}
