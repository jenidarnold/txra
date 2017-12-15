<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PromoAccept extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['promo_id', 'user_referrer_id', 'user_accept_id', 'accepted_at', 'accepted_method_id'];

    public function accepter()
    {
        return $this->hasOne('App\User', 'id', 'user_accept_id');
    }

    /**
     * [Prrofile Progress of the Acceptor]
     * @param  [type] $promo_id [description]
     * @return [integer]           [description]
     */
    public function getProgressAttribute(){
        return $this->accepter->profile->progress;
    }

    /**
     * [Prrofile Progress of the Acceptor]
     * @param  [type] $promo_id [description]
     * @return [integer]           [description]
     */
    public function getCompletedAttribute(){
        if ($this->accepter->profile->progress > 100){
            return 1;
        }
        else{
            return 0;
        }        
    }
}