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
        'facebook', 'twitter', 'linkedin', 'googleplus', 'instagram', 'avatar'
    ];

    public function user()
    {
        return $this->belongsTo('App\User' ,'usar_id', 'id');
    }

    public function getProgressAttribute(){

        $progress = 0;
        $num_fields = 6;

        if ($this->gender <> '')  {
            $progress +=1;
        }
        if ($this->city <> '')  {
            $progress +=1;
        }
        if ($this->skill <> '')  {
            $progress +=1;
        }
        if ($this->racquet <> '')  {
            $progress +=1;
        }
        if ($this->dominant_hand <> '')  {
            $progress +=1;
        }
        if ($this->bio <> '')  {
            $progress +=1;
        }

        $progress =  round($progress / $num_fields * 100);

        return $progress;
    }

    /**
     * The number of profiles completed
     *
     * @var array
     */
    public function getTotalCompleted(){

        $profiles = UserProfile::where('gender', '<>', '')
            ->where('city', '<>', '')
            ->where('skill', '<>', '')
            ->where('racquet', '<>', '')
            ->where('dominant_hand', '<>', '')
            ->where('bio', '<>', '')
            ->get();

        return $profiles->count();
    }

    /**
     * The number of profiles completed
     *
     * @var array
     */
    public function getAvgCompleted(){

        $profiles = new UserProfile;
        $tot = $profiles->count();
        $comp =  $profiles->getTotalCompleted();
        $avg = $comp / $tot * 100;

        return $avg;
    }
}
