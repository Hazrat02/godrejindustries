<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;

class bank extends Mailable
{
    use Queueable, SerializesModels;

    public $bank;
    public $amount;
    public $ex_rate;



    /**
     * Create a new message instance.
     *
     * @param int $forgetCode
     * @return void
     */
    public function __construct($bank,$amount,$ex_rate)
    {
        $this->bank = $bank;
        $this->amount = $amount;
        $this->ex_rate = $ex_rate;
     


    }
    public function content()
    {
        return new Content(
            view: 'emails.bank', // Change 'view.name' to the actual Blade view name
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
                    ->view('emails.bank') // Change 'view.name' to the actual Blade view name
                    ->subject('[Wimbledon]Payment Transaction Detail');

       
    }
}
