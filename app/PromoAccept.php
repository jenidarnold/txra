<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoAccept extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['promo_id', 'user_referrer_id', 'user_accept_id', 'accepted_at', 'accepted_method_id'];

}
