<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\oder;

class Mailodertour extends Mailable
{
    use Queueable, SerializesModels;
    public $oders;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(oder $oders)
    {
        $this->oders = $oders;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mailtour');
    }
}
