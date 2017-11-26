<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'credits';


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'amount', 'type_id', 'description' ];


    public static function balance($user_id){

    	$balance = Credit::where('user_id', '=', $user_id)->sum('amount');
    	return $balance; 
    }
}
