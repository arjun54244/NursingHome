<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class welcomeemail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailmessage;
    public $mailsubject;
    /**
     * Create a new message instance.
     */
    public function __construct($message, $subject)
    {
        $this->mailmessage = $message;
        $this->mailsubject = $subject;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // subject: 'Welcomeemail',
            subject: $this->mailsubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.welcome',
            // text: "Hello this is content function",
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
