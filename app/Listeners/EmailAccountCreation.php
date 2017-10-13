<?php

namespace App\Listeners;

use App\Events\AccountWasCreated;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailAccountCreation
{

    public $mailer;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  AccountWasCreated  $event
     * @return void
     */
    public function handle(AccountWasCreated $event)
    {
       
        // send email account created

        \Mail::send('emails.accounts.created', ['user' => $event->user], function ($m) use ($event->$user) {
            $m->from(env('MAIL_FROM_EMAIL'), 'Texas Racquetball Association');
            $m->to('julie.enid@gmail.com', $event->user->full_name)->subject('New TXRA Account Created!');
        });
    }
}
