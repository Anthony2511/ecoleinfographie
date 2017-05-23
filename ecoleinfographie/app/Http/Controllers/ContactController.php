<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use SEO;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactController extends Controller
{
    public function index()
    {
        SEO::setTitle(trans('contact.title'));
        SEO::setDescription(trans('contact.metaDescription'));
        
        return view('pages.index_contact');
    }
    
    public function contactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|min:2|max:255',
            'lastname'  => 'required|min:2|max:255',
            'email'     => 'required|email',
            'content'   => 'required|min:30|max:5000'
        ]);
        
        if ($validator->fails()) {
            return redirect()->to(route('contact', '#form'))
                ->withInput()
                ->withErrors($validator);
        }
        
        Mail::to(Config::get('settings.contact_email'))
            ->send(new ContactForm($request));
        
        \Session::flash('success', 'Votre message a bien été envoyé. Merci&nbsp;!');
        
        return redirect()->to(route('contact', '#form'));
    }
    
}
