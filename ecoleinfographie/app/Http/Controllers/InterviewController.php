<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function indexWeb()
    {
        return view('pages.web.parcours');
    }
}
