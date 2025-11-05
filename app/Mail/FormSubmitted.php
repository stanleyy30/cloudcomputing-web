<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->subject('Cloud Computing 2025 Registration Confirmation')
                    ->view('form_confirmation')
                    ->with('formData', $this->formData);
    }
}