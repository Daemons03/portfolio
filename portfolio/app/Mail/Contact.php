<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(Array $contact){
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build(){
        return $this->from('m.dagniere@aformac-vichy.fr')
            ->view('emails.contact');
    }
}
