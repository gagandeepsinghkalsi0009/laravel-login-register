<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Headers;

class SignInMail extends Mailable
{
    use Queueable, SerializesModels;

    public $detail;

    public function __construct($user)
    {
        $this->detail =$user;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Successfully Signed In',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $path = public_path('assets/images/expedite.png');
        return new Content(
            view: 'AdminMail',
            with:([
                'image' =>$path,
            ]),
            
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('/assets/attachments/packingslip.pdf'))
            ->as('incometax.pdf')
            ->withMime('application/pdf')

        ];
    }
}
