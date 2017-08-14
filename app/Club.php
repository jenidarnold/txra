<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
	protected  $table = 'clubs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
    ];
}
