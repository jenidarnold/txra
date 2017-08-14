<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected  $table = 'tournaments';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usar_id', 'name', 'start_date', 'end_date', 'url', 'logo',
    ];
}
