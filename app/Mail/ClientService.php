<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientService extends Mailable
{
    use Queueable, SerializesModels;

    public $fields;

    public function __construct($fields)
    {
        $this->fields = $fields;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Запрос на услуги')->view('mail.services');
    }
}
