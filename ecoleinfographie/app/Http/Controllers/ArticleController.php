<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Teacher;
use Illuminate\Http\Request;
use SEO;


class ArticleController extends Controller
{
    protected function index(Article $article)
    {
        $articles = Article::published()->paginate(8);
        /*$teacher = Article::with('teacher')->first();*/
        /*$teacher = Article::whereHas('teacher', function ($query) use ($article){
            $query->where('id', $article->id)->get('teacher');
        });*/
        
        return view('pages.blog', [
            'articles' => $articles,
            'orientation' => $this->getOrientation(),
            /*'teacher' => $teacher*/
        ]);
    }
    
    /*public function getTeacher($id)
    {
        $teacher = Teacher::with('articles')->where('id', $id )->first();
        return $teacher;
    }*/
    
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
