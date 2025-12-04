<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data; // ← This must NOT be removed
    }

    /**
     * Email Subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Message',
        );
    }

    /**
     * Email View
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact.emails',   // ← Your email view file
            with: ['data' => $this->data]
        );
    }

    /**
     * Attachments (if any)
     */
    public function attachments(): array
    {
        return [];
    }
}
