<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InternshipMailFull;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class InternshipController extends Controller
{
    public function index()
    {
        return view('pages.index_internship');
    }
    
    public function sendFull(Request $request)
    {
        $input3d = $request->input('cbox1');
        $input2d = $request->input('cbox2');
        $inputWeb = $request->input('cbox3');
        
        $mailWeb = Config::get('settings.email_web');
        $mail2d = Config::get('settings.email_2d');
        $mail3d = Config::get('settings.email_3d');
        
        $emails = [];
        
        if($input3d == '3D') { array_push($emails, $mail3d); }
        if ($input2d == '2D') { array_push($emails, $mail2d); }
        if ($inputWeb == 'WEB') { array_push($emails, $mailWeb); }
        
        Mail::to($emails)->send(new InternshipMailFull($request));
        
        return redirect()->to(route('internship'));
    }
}
