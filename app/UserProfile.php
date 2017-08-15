<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'gender', 'cell_phone', 'home_phone', 'address', 'zipcode', 'city', 'state',
        'racquet', 'skill', 'dominant_hand', 'bio', 
        'facebook', 'twitter', 'linkedin', 'googleplus', 'instagram'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
