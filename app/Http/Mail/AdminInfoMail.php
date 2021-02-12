<?php

namespace App\Mail;

use App\Models\ContactMe;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminInfoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;

    /**
     * Create a new message instance.
     *
     * @param ContactMe $contact
     */
    public function __construct(ContactMe $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //   return $this->from('gkhnyener@gmail.com')
        return $this->subject(config('app.name') . ' - User Register')
            //   ->cc('gkhnyener@gmail.com')->bcc()
            ->view('email.info');
    }
}
