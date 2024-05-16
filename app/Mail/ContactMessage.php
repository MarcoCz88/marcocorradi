<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $messageContent;

    public function __construct($contact)
    {
        $this->messageContent = $contact;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Message Contact',
            from: new Address($this->messageContent['email'], $this->messageContent['name'])
        );
    }



    public function content(): Content
    {
        return new Content(
            view: 'mail.mail-template',
        );
    }

    
    //  Get the attachments for the message.
     
    //  @return array<int, \Illuminate\Mail\Mailables\Attachment>
    
        

   public function attachments():array 
   {
    return [];
   }
}
