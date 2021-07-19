<?php

namespace App\Mail;

use App\Models\Oder_Car;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OderCar extends Mailable
{
    use Queueable, SerializesModels;
    public $Oder_Car;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Oder_Car $Oder_Car)
    {
        $this->Oder_Car = $Oder_Car;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mailcar');
    }
}
