<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMailForAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $person;
   
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
        return $this->view('Mail.AdminEnquiry',['person'=>$this->person]);
    }
}
