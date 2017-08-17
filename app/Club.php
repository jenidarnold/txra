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
        'name', 'city', 'state', 'zip', 'phone', 'lat', 'lng', 'type', 'courts', 'info', 'url'
    ];

    public function locations()
    {
        return $this->belongsToMany('App\TournamentLocation', 'club_id', 'tournament_id');       
    }
  

}
