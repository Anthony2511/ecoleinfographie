<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use SEO;


class ArticleController extends Controller
{
    protected function index(Request $request)
    {
        $articles = Article::published()->paginate(8);
    
        if ($request->has('search'))
        {
            $search = $request->get('search');
            $articles = Article::published()->where('title', 'LIKE', '%' . $search . '%')->paginate(8);
        
            return view('pages.blog', [
                'articles' => $articles,
                'orientation' => $this->getOrientation()
            ]);
        }
        
        return view('pages.blog', [
            'articles'    => $articles,
            'orientation' => $this->getOrientation(),
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
    
    public function autocomplete(Request $request)
    {
        $term = $request->get('term');
        
        $results = array();
        
        $queries = Article::where('title', 'LIKE', '%' . $term . '%')->published()->take(5)->get();
        
        foreach ($queries as $query) {
            $results[] = ['slug' => $query->slug, 'value' => $query->title];
        }
        
        return \Response::json($results);
    }
    
    
}
