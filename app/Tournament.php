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

    /**
     * live tournaments
     * @return [type]        [description]
     */
    public static function live() {
    	return self::orderBy('start_date')
				->where('start_date', '<=', date("Y-m-d"))
				->where('end_date', '>=', date("Y-m-d"))				
				->get();
	}

     /* future tournaments
     * @return [type]        [description]
     */
    public static function future() {
    	return self::orderBy('start_date')
				->where('start_date', '>', date("Y-m-d"))
				->get();
	}

     /* past tournaments
     * @param  [type] $days [description]
     * @return [type]        [description]
     */
    public static function past($days = null) {
	 	if ( $days == null ){
        	return self::orderBy('start_date', 'desc')
				->where('end_date','<', date("Y-m-d"))
				->get();
        } else {
            return  self::orderBy('start_date', 'desc')
				->where('end_date','<', date("Y-m-d"))
				->where('start_date', '>', date('Y-m-d', strtotime("-$days days")))
				->get();        
        }
    }
  
}
