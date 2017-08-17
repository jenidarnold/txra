<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usar_id', 'location_id', 'group_id', 'rank', 'effective'
    ];

    /**
     *  User's Usar account
     */

    public function usar()
    {
        return $this->hasOne('App\UsarMember', 'id', 'usar_id');
    }
}
