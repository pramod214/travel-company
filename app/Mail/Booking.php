<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PhpParser\Node\Expr\Array_;

class Booking extends Mailable
{
    use Queueable, SerializesModels;
    public $booking_mails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $booking_mails)
    {
        $this->booking_mails = $booking_mails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.booking');
    }
}
