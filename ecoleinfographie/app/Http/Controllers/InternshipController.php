<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InternshipMailFull;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    public function index()
    {
        return view('pages.index_internship');
    }
    
    public function sendFull(Request $request)
    {
        Mail::to('jimmy@letecheur.me')->send(new InternshipMailFull($request));
        
        return redirect()->to(route('internship'));
    }
}
