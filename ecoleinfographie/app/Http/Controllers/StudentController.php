<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function indexWeb()
    {
        return view('pages.web.parcours');
    }
}
