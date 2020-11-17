<?php

namespace App\Mail;

use App\Models\Service;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientTariffs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $fields;
    public $serviceTitle;

    public function __construct($fields, $id)
    {
        $this->fields = $fields;
        $this->serviceTitle = Service::find($id)->title;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Запрос на услугу, С тарифами')->view('mail.tariffs');

    }
}
