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
    
    public function show(Work $work)
    {
        SEO::setTitle( $work->title );
        SEO::setDescription( $work->title . ', une réalisation dans le cadre de la formation dispensée à la Haute École de la Province de Liège' );
        
        return view('posts.postWork', [
            'work' => $work,
            'orientations' => $this->getOrientation(),
            'get3dWork' => $this->get3dWork($work->id),
            'get2dWork' => $this->get2dWork($work->id),
            'getWebWork' => $this->getWebWork($work->id)
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
    
    public function get3dWork($id)
    {
        $workFrom3D = Work::whereNotIn('id', [$id])->where('orientation', '3D')->inRandomOrder()->limit(1)->first();
        return $workFrom3D;
    }
    
    public function get2dWork($id)
    {
        $workFrom2D = Work::whereNotIn('id', [$id])->where('orientation', '2D')->inRandomOrder()->limit(1)->first();
        return $workFrom2D;
    }
    
    public function getWebWork($id)
    {
        $workFromWeb = Work::whereNotIn('id', [$id])->where('orientation', 'web')->inRandomOrder()->limit(1)->first();
        return $workFromWeb;
    }
    
}
