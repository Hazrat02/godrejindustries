<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;

class transection extends Mailable
{
    use Queueable, SerializesModels;

    public $amount;
    public $type;


    /**
     * Create a new message instance.
     *
     * @param int $forgetCode
     * @return void
     */
    public function __construct($amount ,$type)
    {
        $this->amount = $amount;
        $this->type = $type;

    }
    public function content()
    {
        return new Content(
            view: 'emails.trx', // Change 'view.name' to the actual Blade view name
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@wimbledoninvestments.com') // Set the sender's email address
                    ->view('emails.trx') // Change 'view.name' to the actual Blade view name
                    ->subject('[Wimbledon]Payment Transaction Detail');

       
    }
}
