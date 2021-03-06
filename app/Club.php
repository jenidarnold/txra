<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Checkin;
use App\OpenGraphFree;

class Club extends Model
{
	protected  $table = 'clubs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'city', 'state', 'zip', 'phone', 'lat', 'lng', 'type', 'courts', 'info', 'url', 'map_icon'
    ];

    /**
     *  The accessors getFooAttribute that are appended to the Response so that they can be used in javascript
     */
    protected $appends = array('checkins_total', 'checkins_recent', 'checkin_data');

    public function locations()
    {
        return $this->belongsToMany('App\TournamentLocation', 'club_id', 'tournament_id');       
    }


    static function get_og_image($url){

        $opengraph = OpenGraphFree::fetch($url);

        if (!isset($opengraph->image)) {
             $image = "";
         }
         else {
             $image = $opengraph->image;
         }   

        return $image;
        
    }

    public function checkins()
    {
        return $this->hasMany('App\Checkin', 'club_id', 'id');       
    }
  

    public function getCheckinsTotalAttribute()
    {
        return $this->checkins()->count();
    }

    public function getCheckinsRecentAttribute()
    {
        /*TODO need to use client's timezone */
        $date = \Carbon\Carbon::now('America/Chicago');
        
        $date->modify('-1 hours');
        $formatted_date = $date->format('Y-m-d H:i:s');

        return $this->checkins()
            ->where('checkin_at', '>=', $formatted_date)
            ->count();
    }    

    public function getCheckinDataAttribute()
    {

        $data = [];

        // //Get AVG number of checkins per hour per day of the week
        // for($d = 0; $d <=6; $d++){
        //     for($x = 6; $x <=22; $x++){

        //         $num_by_hour = \DB::table('checkins')
        //             ->where('club_id', '=', $this->id)
        //             ->where(\DB::raw('WEEKDAY(checkin_at)'), '=', $d)
        //             ->where(\DB::raw('HOUR(checkin_at)'), '>', $x-1)
        //             ->where(\DB::raw('HOUR(checkin_at)'), '<=',$x)
        //             ->count();

        //         $num_by_day = \DB::table('checkins')
        //             ->where('club_id', '=', $this->id)
        //             ->where(\DB::raw('WEEKDAY(checkin_at)'), '=', $d)
        //             ->count();

        //         //Average checkins per particular day
        //         if ($num_by_day > 0) {
        //             $data[$d][$x] = $num_by_hour / $num_by_day *100;
        //         }else {
        //             $data[$d][$x] = 0;
        //         }
        //     }
        // }

        return $data;
    }

    public function get_map_icon($i = 1) {

        $path = $this->get_map_icon_path($this->map_icon);
        $icon = "number_".$i.".png";
      
        return "$path/$icon";
    }

    static function get_map_icon_path($type) {
        switch ($type) {
            case 'club':
                $path = "../images/mapicons/mapiconscollection-numbers-6b0e5a-iphone";
                break;          
            case 'support':
                $path = "../images/mapicons/mapiconscollection-numbers-c90a0a-iphone";
                break;
            case 'military':
                $path = "../images/mapicons/mapiconscollection-numbers-141717-iphone";
                break;
            case 'college':
                $path = "../images/mapicons/mapiconscollection-numbers-088f99-iphone";
                break;
            case 'ymca':
                $path = "../images/mapicons/mapiconscollection-numbers-223ce6-iphone";
                break;
            case 'rec':
                $path = "../images/mapicons/mapiconscollection-numbers-107a53-iphone";
                break;
            default:
                $path = "../images/mapicons/mapiconscollection-numbers-107a53-iphone";
                break;
        }
        return $path;
    }

    static function get_map_icon_count($type = null){

        if($type == 'all'){
            $count = Club::all()->count();
        }else{

            $count = Club::where('map_icon', '=', $type)
                ->where('lat' ,'<>', 0)
                ->count();
        }

        return $count;
    }

    static function get_map_icon_legend($type) {

        $legend = Club::get_map_icon_path($type) . "/number_" . Club::get_map_icon_count($type) . ".png";

        return $legend;
    }
}
