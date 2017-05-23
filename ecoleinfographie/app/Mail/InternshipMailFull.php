<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InternshipMailFull extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name;
    public $company;
    public $subject;
    public $email;
    public $description;
    public $profils;
    public $proposition;
    
    
    public function __construct(Request $request)
    {
        $this->name        = $request->input('name');
        $this->company     = $request->input('company');
        $this->subject     = $request->input('subject');
        $this->email       = $request->input('email');
        $this->description = $request->input('description');
        $this->profils     = $request->input('profils');
        $this->proposition = $request->input('proposition');
    }
    
    
    public function build()
    {
        
        return $this->view('mails.sendFull')
                    ->subject($this->subject)
                    ->from($this->email, $this->name);
    }
}
