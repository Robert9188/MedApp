<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationInfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;

    public $profileLink;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reservation, $profileLink)
    {
        $this->reservation = $reservation;
        $this->profileLink = $profileLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reservation-info-mail');
    }
}
