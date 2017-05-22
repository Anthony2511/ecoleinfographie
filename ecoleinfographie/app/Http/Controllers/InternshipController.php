<?php

namespace App\Http\Controllers;

use App\Mail\InternshipMailFile;
use App\Mail\InternshipMailFull;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Validator;

class InternshipController extends Controller
{
    public function index()
    {
        return view('pages.index_internship');
    }
    
    public function sendFull(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name'        => 'required|min:2|max:255',
            'company'     => 'required|min:2|max:255',
            'subject'     => 'required|min:2|max:255',
            'email'       => 'required|email',
            'cbox1'       => 'required_without_all:cbox2,cbox3',
            'cbox2'       => 'required_without_all:cbox1,cbox3',
            'cbox3'       => 'required_without_all:cbox1,cbox2',
            'description' => 'required|min:50|max:5000',
            'profils'     => 'required|min:50|max:5000',
            'proposition' => 'required|min:50|max:5000'
        ]);
        
        if ($validator->fails()) {
            return redirect()->to(route('internship', '#form'))
                             ->withInput()
                             ->withErrors($validator);
        }
        
        $input3d  = $request->input('cbox1');
        $input2d  = $request->input('cbox2');
        $inputWeb = $request->input('cbox3');
        
        $mailWeb = Config::get('settings.email_web');
        $mail2d  = Config::get('settings.email_2d');
        $mail3d  = Config::get('settings.email_3d');
        
        $emails = [];
        
        if ($input3d == '3D') {
            array_push($emails, $mail3d);
        }
        if ($input2d == '2D') {
            array_push($emails, $mail2d);
        }
        if ($inputWeb == 'WEB') {
            array_push($emails, $mailWeb);
        }
        
        Mail::to($emails)->send(new InternshipMailFull($request));
        
        return redirect()->to(route('internship'));
    }
    
    public function sendFile(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name-pdf'    => 'required|min:2|max:255',
            'company-pdf' => 'required|min:2|max:255',
            'subject-pdf' => 'required|min:2|max:255',
            'email-pdf'   => 'required|email',
            'cbox1-pdf'   => 'required_without_all:cbox2-pdf,cbox3-pdf',
            'cbox2-pdf'   => 'required_without_all:cbox1-pdf,cbox3-pdf',
            'cbox3-pdf'   => 'required_without_all:cbox1-pdf,cbox2-pdf',
            'file-pdf'    => 'required|mimes:pdf'
        ]);
        
        if ($validator->fails()) {
            return redirect()->to(route('internship', 'form=pdf#form'))
                             ->withInput()
                             ->withErrors($validator);
        }
        
        $input3d  = $request->input('cbox1-pdf');
        $input2d  = $request->input('cbox2-pdf');
        $inputWeb = $request->input('cbox3-pdf');
        
        $mailWeb = Config::get('settings.email_web');
        $mail2d  = Config::get('settings.email_2d');
        $mail3d  = Config::get('settings.email_3d');
        
        $emails = [];
        
        if ($input3d == '3D-pdf') {
            array_push($emails, $mail3d);
        }
        if ($input2d == '2D-pdf') {
            array_push($emails, $mail2d);
        }
        if ($inputWeb == 'WEB-pdf') {
            array_push($emails, $mailWeb);
        }
        
        Mail::to($emails)
            ->send(new InternshipMailFile($request));
        
        return redirect()->to(route('internship', 'form=pdf#form'));
    }
}
