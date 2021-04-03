<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $visitorName;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param $visitorName
     * @param $email
     * @param $message
     */
    public function __construct($visitorName, $email, $message)
    {
        $this->visitorName = $visitorName;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactForm');
    }
}
