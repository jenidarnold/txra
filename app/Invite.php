<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token',
        'first_name',
        'last_name',
        'email',
        'accepted',
        'accepted_at',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'token';
    }

    public function getFullNameAttribute()
    {
        return  $this->first_name . ' ' . $this->last_name;
    }

    public function create_with_token($data)
    {

        // validate the incoming request data
        do {
            //generate a random string using Laravel's str_random helper
            $token = str_random();
        } //check if the token already exists and if it does, try again
        while (Invite::where('token', $token)->first());

        //create a new invite record
        $invite = Invite::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'token' => $token
        ]);

        return $invite;
    }

}
