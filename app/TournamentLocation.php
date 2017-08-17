<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentLocation extends Model
{
    protected  $table = 'tournament_locations';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tournament_id', 'club_id' 
    ];

    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

   public function club()
    {
        return $this->hasOne('App\TournamentLocation', 'tournament_id', 'club_id');       
    }
  
}
