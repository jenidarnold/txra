<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token',
        'promo_id',
        'user_id'
    ];

    protected $primaryKey = 'token';

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'token';
    }


    public function create_with_token($promo_id, $user_id)
    {

        // validate the incoming request data
        do {
            //generate a random string using Laravel's str_random helper
            $token = str_random();
        } //check if the token already exists and if it does, try again
        while (Referral::where('token', $token)->first());

        //create a new invite record
        $refer = Referral::create([
            'promo_id' => $promo_id,
            'user_id' => $user_id,
            'token' => $token
        ]);

        return $refer;
    }

    /**
     * User's referrals by Promo
     *
     */
    public function referrals($promo_id) {
        return $this->hasMany('App\PromoAccept', 'user_referrer_id', 'user_id')
        	->where('promo_id', '=', $promo_id);
    }
}
