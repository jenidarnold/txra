<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;

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
                ;
	}

     /* future tournaments
     * @return [type]        [description]
     */
    public static function future() {
    	return self::orderBy('start_date')
				->where('start_date', '>', date("Y-m-d"))
                ;
	}

     /* past tournaments
     * @param  [type] $days [description]
     * @return [type]        [description]
     */
    public static function past($days = null) {
	 	if ( $days == null ){
        	return self::orderBy('start_date', 'desc')
				->where('end_date','<', date("Y-m-d"))
                ;
        } else {
            return  self::orderBy('start_date', 'desc')
				->where('end_date','<', date("Y-m-d"))
				->where('start_date', '>', date('Y-m-d', strtotime("-$days days")))
                ;
        }
    }

     /* tournament location relation
     * @return [type]        relationship
     */
    public function location()
    {
        $location = $this->hasOne('App\TournamentLocation', 'tournament_id','usar_id');

        return  $location;
    }

     /* tournament club
     * @return [type]  Club
     */
    public function club() {

        $club_id = $this->location->club_id;
        return Club::find($club_id);
    }
  
    public function getStartAttribute(){
        return \DateTime::createFromFormat('Y-d-m', $this->start_date)->format('m/d/y');
    }

    public function getEndAttribute(){
        return \DateTime::createFromFormat('Y-d-m', $this->end_date)->format('m/d/y');
    }
}
