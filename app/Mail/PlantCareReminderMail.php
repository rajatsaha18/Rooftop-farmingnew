<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PlantCareReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $plant;
    public $type;
    public $next_due_date;


    /**
     * Create a new message instance.
     */
    public function __construct($plant,$type,$next_due_date)
    {
        $this->plant = $plant;
        $this->type = $type;
        $this->next_due_date = $next_due_date;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Plant Care Reminder Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.plant-care-reminder',
            with:[
                'plantName' => $this->plant,
                'careType' => $this->type,
                'nextDueDate' => $this->next_due_date,
            ],
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
