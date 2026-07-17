<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CustomerReplyMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('We Received Your Message')
                    ->view('emails.contact_customer');
    }
}
