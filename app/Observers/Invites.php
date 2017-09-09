<?php

namespace App\Observers

use App\Invite;

class Invites
{
    /**
     * Listen to the Invite creating event.
     *
     * @param  Invite  $invite
     * @return void
     */
    public function creating(Invite $invite)
    {
        $invite->token = $this->generateToken();
    }

    /**
     * Listen to the Invite created event.
     *
     * @param  Invite  $invite
     * @return void
     */
    public function created(Invite $invite)
    {
        event(new NewInviteWasCreated($invite));
    }

    /**
     * Generate random token, check if unique, if not regenerate.
     *
     * @return string $token
     */
    protected function generateToken()
    {
        $token = str_random(10);
        if(Invite::where('token', $token)->first()) {
            return $this->generateToken();
        }
        return $token;
    }
}
