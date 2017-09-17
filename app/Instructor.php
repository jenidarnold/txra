<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
   
  	protected $fillable = [
        'usar_id', 'first_name', 'last_name', 'level', 'date_certified', 'valid_until', 
        'city', 'state', 'phone', 'email', 'facebook', 'quote', 'blurb', 'logo'
    ];

}
