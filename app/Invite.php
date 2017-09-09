<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token',
        'first_name',
        'last_name',
        'email',
        'accepted',
        'accepted_at',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'token';
    }

    public function getFullNameAttribute()
    {
        return  $this->first_name . ' ' . $this->last_name;
    }
}
