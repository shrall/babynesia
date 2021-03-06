<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactMail;
    public $sender;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactMail, $sender)
    {
        $this->contactMail = $contactMail;
        $this->sender = $sender;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from($address = "shrallvierdo@gmail.com", $name = $this->sender)
        ->subject($this->contactMail->subject)
        ->view('user.mails.contactmail');
    }
}
