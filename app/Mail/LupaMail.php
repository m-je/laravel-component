<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LupaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = "admin@stii.my.id";
        $subject = "Reset Password CSMS";
        $nama = "Admin CSMS";

        return $this->view('emails.purcashing.lupa')
        ->from($address, $nama)
        ->subject($subject)
        ->with(['data' => $this->data]);
    }
}
