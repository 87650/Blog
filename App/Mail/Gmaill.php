<?php

namespace App\Mail;
use App\Mail;
use App;
//use App\Modell;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Support\Facades\App;

class Gmaill extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param Modell $user
     */

    public $user;

    public function __construct($user)
    {
       $this->$user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.Maile')->subject("mail subject");
    }
}
