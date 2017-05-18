<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use SEO;


class ArticleController extends Controller
{
    protected function index(Request $request)
    {
        $articles = Article::published()->paginate(8);
        
        
        if ($request->has('search')) {
            return $this->search($request);
        }
        
        if ($request->has('category') && ! $request->has('subcategory')) {
            return $this->searchCategory($request);
        }
        
        if ($request->has('category') && ('subcategory')) {
            return $this->searchSubCategories($request);
        }
        
        
        return view('pages.blog', [
            'articles'         => $articles,
            'orientation'      => $this->getOrientation(),
            'subCategoriesWeb' => $this->getSubCategoriesWeb(),
            'subCategories2d'  => $this->getSubCategories2d(),
            'subCategories3d'  => $this->getSubCategories3d()
        ]);
    }
    
    public function searchCategory($request)
    {
        $search = $request->get('category');
        
        $articles = Article::published()
                           ->where('orientation', 'LIKE', '%' . $search . '%')
                           ->paginate(8);
        
        return view('pages.blog', [
            'articles'         => $articles,
            'orientation'      => $this->getOrientation(),
            'subCategoriesWeb' => $this->getSubCategoriesWeb(),
            'subCategories2d'  => $this->getSubCategories2d(),
            'subCategories3d'  => $this->getSubCategories3d()
        ]);
    }
    
    public function search($request)
    {
      
        
        $search = $request->get('search');
        $keywords = explode(" ", $search);
    
        $article = Article::query();
        foreach($keywords as $word){
            $article->where('title', 'LIKE', '%' . $word . '%');
                  /*  ->orWhere('content', 'LIKE', '%' . $word . '%')
                    ->orWhere('introduction', 'LIKE', '%' . $word . '%');*/
        }
    
        $articles = $article->published()->paginate(8);
        
        
        return view('pages.blog', [
            'articles'         => $articles,
            'orientation'      => $this->getOrientation(),
            'subCategoriesWeb' => $this->getSubCategoriesWeb(),
            'subCategories2d'  => $this->getSubCategories2d(),
            'subCategories3d'  => $this->getSubCategories3d()
        ]);
    }
    
    public function searchSubCategories($request)
    {
        $category = $request->get('category');
        
        $articles = Article::published()->whereHas('category', function ($query) {
            $query->where('slug', 'LIKE', Request('subcategory'));
        })->where('orientation', 'LIKE', '%' . $category . '%')->paginate(8);
        
        
        return view('pages.blog', [
            'articles'         => $articles,
            'orientation'      => $this->getOrientation(),
            'subCategoriesWeb' => $this->getSubCategoriesWeb(),
            'subCategories2d'  => $this->getSubCategories2d(),
            'subCategories3d'  => $this->getSubCategories3d()
        ]);
    }
    
    public function getSubCategoriesWeb()
    {
        $subCategoriesWeb = Category::whereHas('articles', function ($query) {
            $query->where('orientation', 'web');
        })->orderBy('name', 'ASC')->get();
        
        return $subCategoriesWeb;
    }
    
    public function getSubCategories2d()
    {
        $subCategories2d = Category::whereHas('articles', function ($query) {
            $query->where('orientation', '2d');
        })->orderBy('name', 'ASC')->get();
        
        return $subCategories2d;
    }
    
    public function getSubCategories3d()
    {
        $subCategories3d = Category::whereHas('articles', function ($query) {
            $query->where('orientation', '3d');
        })->orderBy('name', 'ASC')->get();
        
        return $subCategories3d;
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
        
        $filterItem = array("le", "la", "les", "un", "une", 'avec', 'sur');
        $term = $request->get('term');
        
        $results = array();
        
        $arr = explode(' ', $term);
        
        foreach ($arr as $val) {
            //you can ignore words like a,an,in,on etc
            if ( ! in_array($val, $filterItem)) {
                $ids[] = Article::where('title', 'LIKE', '%' . $val . '%')->published()->pluck('id');
            }
        }
        
        $queries = Article::whereIn('id', $ids)->get();
        
        
        foreach ($queries as $query) {
            $results[] = ['slug' => $query->slug, 'value' => $query->title];
        }
        
        return \Response::json($results);
    }
    
    
}
