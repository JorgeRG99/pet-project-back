<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdoptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pet;
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pet, $status)
    {
        $this->pet = $pet;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Adoption Status Update')
                    ->view('emails.adoption');
    }
}
