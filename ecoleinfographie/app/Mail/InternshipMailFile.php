<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InternshipMailFile extends Mailable
{
    use Queueable, SerializesModels;
    
    public $namePdf;
    public $companyPdf;
    public $subjectPdf;
    public $emailPdf;
    public $descriptionPdf;
    public $filePdf;
    
    
    public function __construct(Request $request)
    {
        $this->namePdf        = $request->input('name-pdf');
        $this->companyPdf     = $request->input('company-pdf');
        $this->subjectPdf     = $request->input('subject-pdf');
        $this->emailPdf       = $request->input('email-pdf');
        $this->descriptionPdf = $request->input('description-pdf');
        $this->filePdf        = $request->file('file-pdf');
    }
    
    
    public function build()
    {
        return $this->view('mails.sendFile')
                    ->subject($this->subjectPdf)
                    ->from($this->email, $this->name)
                    ->attach($this->filePdf->getRealPath(), [
                        'as'   => 'offre-de-stage-' . $this->companyPdf . '.' . $this->filePdf->getClientOriginalExtension(),
                        'mime' => $this->filePdf->getMimeType()
                    ]);
    }
}
