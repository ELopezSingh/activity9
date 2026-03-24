<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LoginAlertMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // Agregamos la variable pública

    public function __construct(User $user)
    {
        $this->user = $user; // Asignamos el usuario al instanciar
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New login alert',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.login-alert',
        );
    }
}