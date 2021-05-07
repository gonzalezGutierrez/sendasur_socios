<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData,$place;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactData,$place)
    {
        $this->contactData = $contactData;
        $this->place       = $place;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nueva reservación')->view('mail.contact');
    }
}
