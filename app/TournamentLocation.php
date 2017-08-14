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
}
