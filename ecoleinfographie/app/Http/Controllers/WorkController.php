<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use SEO;

class WorkController extends Controller
{
    public function index(Request $request)
    {
        SEO::setTitle('Les travaux de nos étudiants');
        SEO::setDescription('Découvres les travaux que nos étudiants réalisent chaque année au cours de leur formation');
        
        $query = Work::inRandomOrder();
        
        if ($request->has('orientation')){
            $query->where('orientation', $request->get('orientation'));
        }
        
        $works = $query->paginate(11);
    
        if ($request->ajax()) {
            return [
                'works'  => view('partials.realisations.item-realisations',
                    [
                        'works'     => $works,
                        'orientations' => $this->getOrientation()
                    ])->render(),
                'next_page' => $works->nextPageUrl() . '&orientation=' . $request->get('orientation'),
            ];
        }
        
        return view('pages.realisations', [
            'works' => $works,
            'orientations' => $this->getOrientation(),
            'getLoadMoreLink' => $this->getLoadMoreLink($request)
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
    
    public function getLoadMoreLink(Request $request)
    {
        if ($request->has('orientation')) {
            return '&orientation=' . $request->get('orientation');
        }
    }
    
}
