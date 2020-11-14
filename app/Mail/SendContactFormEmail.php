<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name = $inputs['name'];
        $this->email = $inputs['email'];
        $this->message = $inputs['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('anchoredphotographyFL@gmail.com')
                    ->view('emails.contact-form')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'user_message' => $this->message,
                    ]);
    }
}
