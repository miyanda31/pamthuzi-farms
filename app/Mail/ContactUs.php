<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public string $email,$name,$body,$title;

    /**
     * Create a new message instance.
     * @param string $email
     * @param string $name
     * @param string $body
     * @param string $title
     */
    public function __construct(string $email, string $name, string $message, string $title)
    {
        //
        $this->email = $email;
        $this->name = $name;
        $this->body = $message;
        $this->title = $title;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email,$this->name),
            to: env('MAIL_FROM_ADDRESS'),
            subject: $this->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.contact-us',
        );
    }
}
