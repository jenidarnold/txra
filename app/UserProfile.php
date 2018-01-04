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

        $num_fields = 7;
        
        $progress = $num_fields - $this->missing;
        $progress =  round($progress / $num_fields * 100);

        return $progress;
    }

    public function getMissingAttribute(){

        $progress = 0;
        $num_fields = 7;

        if (($this->gender <> '') && ($this->gender <> 'none')) {
            $progress +=1;
        }
        if ($this->city <> '') {
            $progress +=1;
        }
        if (($this->skill <> '') && ($this->skill <> 'none')) {
            $progress +=1;
        }
        if (($this->racquet <> '')  && ($this->racquet <> 'none')){
            $progress +=1;
        }
        if (($this->dominant_hand <> '')  && ($this->dominant_hand <> 'none')) {
            $progress +=1;
        }
        if ($this->bio <> '')  {
            $progress +=1;
        }

        if ($this->is_avatar_unique){
            $progress +=1;
        }

        $missing = $num_fields - $progress;

        return $missing;
    }

    /**
     *  The Avatar cksum
     *  
     */
    public function getIsAvatarUniqueAttribute(){

        $file = "images/members/$this->user_id/$this->avatar";
        $cksum = md5_file($file,false);

        if ($cksum == "1b272bbdcaf773fe50e398c50a3eb164" ){
            return false;
        }
        else {
            return true;
        }
    }

    /**
     * The number of profiles completed
     * @var array
     */
    public function getTotalCompleted(){

        $profiles = UserProfile::where('gender', '<>', '')
            ->where('gender', '<>', 'none')
            ->where('city', '<>', '')
            ->where('skill', '<>', '')
            ->where('skill', '<>', 'none')
            ->where('racquet', '<>', '')
            ->where('racquet', '<>', 'none')
            ->where('dominant_hand', '<>', '')
            ->where('dominant_hand', '<>', 'none')
            ->where('bio', '<>', '')
            ->get();

        $cnt=0;   
        foreach ($profiles as $profile) {

            if ($profile->is_avatar_unique){
                $cnt++;
            }        
        }

        return $cnt;
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
