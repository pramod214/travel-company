<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Approve extends Mailable
{
    use Queueable, SerializesModels;
    public $book;
    public $package;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($book,$package)
    {
        $this->book = $book;
        $this->package = $package;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.approve');
    }
}
