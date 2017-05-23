<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    
    public $firstname;
    public $lastname;
    public $email;
    public $content;
    
    
    public function __construct(Request $request)
    {
        $this->firstname = $request->input('firstname');
        $this->lastname  = $request->input('lastname');
        $this->email     = $request->input('email');
        $this->content   = $request->input('content');
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contactForm')
                    ->subject(ucfirst($this->firstname) . ' ' . ucfirst($this->lastname) . ' viens d’envoyer un message à partir du site ecoleinfographie.be')
                    ->from($this->email, ucfirst($this->firstname) . ' ' . ucfirst($this->lastname));
    }
}
