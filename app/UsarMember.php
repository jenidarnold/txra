<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsarMember extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'first_name', 'last_name', 'gender', 'city', 'state', 'skill', 'avatar'
    ];


    /*
    
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
