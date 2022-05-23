<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;
public $person;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($p)
    {
        $this->person=$p;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mail.Enquiry',['person'=>$this->person]);
    }
}
