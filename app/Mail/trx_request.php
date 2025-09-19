<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;

class trx_request extends Mailable
{
    use Queueable, SerializesModels;

    public $amount;
    public $type;
    public $platform;
    public $network;
    public $address;
    public $role;


    /**
     * Create a new message instance.
     *
     * @param int $forgetCode
     * @return void
     */
    public function __construct($amount,$type,$platform,$network,$address,$role)
    {
        $this->amount = $amount;
        $this->type = $type;
        $this->platform = $platform;
        $this->network = $network;
        $this->address = $address;
        $this->role = $role;


    }
    public function content()
    {
        return new Content(
            view: 'emails.request', // Change 'view.name' to the actual Blade view name
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
                    ->view('emails.request') // Change 'view.name' to the actual Blade view name
                    ->subject('[Wimbledon]Payment Transaction Detail');

       
    }
}
