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

        $user = $event->user;

        \Mail::send('emails.accounts.created', ['user' => $user], function ($m) use ($user) {
            $m->from(env('MAIL_FROM_EMAIL'), 'Texas Racquetball Association');
            $m->to('julie.enid@gmail.com', $user->full_name)->subject('New TXRA Account Created!');
        });
    }
}
