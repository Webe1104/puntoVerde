<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoMail extends Mailable
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
        // $nombre = $data['nombre'];
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->from('puntoverdegrupo@gmail.com')
    //                 ->view('emails.contacto');
    // }

    public function build()
        {
            return $this->view('emails.contacto')
                        ->with([
                            'data' => $this->data,
                        ]);
        }
}
