<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
	protected  $table = 'checkins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'club_id', 'device_id', 'user_id'
    ];

}
