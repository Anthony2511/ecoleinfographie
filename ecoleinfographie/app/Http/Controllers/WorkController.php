<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use SEO;

class WorkController extends Controller
{
    public function index()
    {
        SEO::setTitle('Les travaux de nos étudiants');
        SEO::setDescription('Découvres les travaux que nos étudiants réalisent chaque année au cours de leur formation');
        
        return view('pages.realisations');
    }
    
}
