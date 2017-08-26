<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rank;

class UsarMember extends Model
{


    protected  $table = 'usar_members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'first_name', 'last_name', 'gender', 'city', 'state', 'skill', 'avatar'
    ];


    /*
    
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'usar_id');
    }


    /**
     * User's fullname
     *
     */
    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * User's fullname
     *
     */
    public function getStateIdAttribute() {
        return 1;
    }

    /**
     * User's group Id based on gender, singles, dobules, mixed
     *
     */
    public function getGroupIdAttribute() {

        if ($this->gender == 'Female'){
            return 2;
        }
        return 1;
    }



    public function ranks(){
        return $this->hasMany('App\Rank', 'usar_id', 'id');
    }

    /**
     * User's State Rank
     *
     */
    public function getRank($group_id, $location_id)
    {    
        $rank = 0;
       
        $r = Rank::orderBy('effective', 'desc')
            ->where("usar_id", '=', $this->id)
            ->where("location_id", '=', $location_id)
            ->where("group_id", '=', $group_id)
            ->limit(1)
            ->get()
            ;

        if (isset($r[0])) {
         $rank = $r[0]->rank;
        }
        return $rank;
    }


    /**
     * User's Latest Rank Date
     *
     */
    public function getEffectiveRankAttribute()
    {
        $effective = "";
       
        $r = Rank::orderBy('effective', 'desc')
            ->where("usar_id", '=', $this->id)
            ->limit(1)
            ->get()
            ;

        if (isset($r[0])) {
         $effective = $r[0]->effective;
        }
        return $effective;
    }

    /**
     * User's State Rank
     *
     */
    public function getStateSinglesRankAttribute()
    {
        $group_id = $this->group_id;
        $location_id = $this->state_id;
        return $this->getRank($group_id, $location_id);
    }

    /**
     * User's State Doubles Rank
     *
     */
    public function getStateDoublesRankAttribute()
    {
        $group_id = $this->group_id + 2;
        $location_id = $this->state_id;
        return $this->getRank($group_id, $location_id);
    }

        /**
     * User's State Mixed Rank
     *
     */
    public function getStateMixedRankAttribute()
    {
        $group_id = $this->group_id + 4;        
        $location_id = $this->state_id;
        return $this->getRank($group_id, $location_id);
    }

     /**
     * User's Natinal Singles Rank
     *
     */
    public function getNationalSinglesRankAttribute()
    {
        $group_id = $this->group_id;
        $location_id = 0;
        return $this->getRank($group_id, $location_id);
    }

    /**
     * User's State Doubles Rank
     *
     */
    public function getNationalDoublesRankAttribute()
    {
        $group_id = $this->group_id + 2;
        $location_id = 0;
        return $this->getRank($group_id, $location_id);
    }

        /**
     * User's State Mixed Rank
     *
     */
    public function getNationalMixedRankAttribute()
    {
        $group_id = $this->group_id + 4;
        $location_id = 0;
        return $this->getRank($group_id, $location_id);
    }
}
