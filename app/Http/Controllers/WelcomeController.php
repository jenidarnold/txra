<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Tournament;
use App\Post;
use App\PostCategory;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tournaments["live"] = Tournament::live()
            ->where('name', 'not like', '%Ladder')
            ->where('name', 'not like', '%League')
            ->get();
        $tournaments["future"] = Tournament::future()
            ->where('name', 'not like', '%Ladder')
            ->where('name', 'not like', '%League')
            ->get();
        $tournaments["recent"] = Tournament::past(90)
            ->where('name', 'not like', '%Ladder')
            ->where('name', 'not like', '%League')
            ->get();
            

        $categories = new PostCategory;

        //Trending
        $trending =  $mostRecommended = Post::mostRecommended();
        


        //Spotlight
        $spot_id = $categories
        	->where('category', '=', 'Player Spotlight' )
        	->first()
        	->id
        ;

        $spotlight =  $categories->find($spot_id)->posts()
                ->where('public','=',1)
                ->orderBy('created_at','desc')
                ->first();


        //Recent
        $recent   = Post::lastPosts(3)
            ->where('public','=',1)
            ->where('id', '<>', $spotlight->id)
            ->where('id', '<>', $trending->id)
            ->get()
            ->first();

        //Tip of the Day
        $tip_id = $categories
        	->where('category', '=', 'Tip of the Day' )            
        	->first()
        	->id
        ;

        $tip =  $categories->find($tip_id)->posts()
                ->orderBy('created_at','desc')
                ->where('public', 1)
                ->first();


        //$videos = collect();
        $videos = [];

        //State Singles 2019
        $video = (object)[
                        'id' => '313409692',
                        'src' => 'https://player.vimeo.com/video/313409692?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1',
                        'title' => '2019 Texas State Singles Racquetball Championships (TSSRC), March 22-24',
                        'title_link' => 'http://www.r2sports.com/website/event-website.asp?TID=30330',
                        'callout' =>'The premiere singles tournament for racquetball, hosted at Texas A&M in College Station, Texas.  The deadline for this event will be Monday, March 18th @10pm.',
               ];


        array_push($videos, $video);  
        //NMRA 2019
        $video = (object)[
                        'id' => '317720311',
                        'src' => 'https://player.vimeo.com/video/317720311?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1',
                        'title' => '2019 NMRA National Championships, March 6 - 9, in San Antonio',
                        'title_link' => 'http://www.r2sports.com/website/event-website.asp?TID=30064',
                        'callout' =>'Welcome to the 2019 NMRA National Championships, March 6 through 9, 2019. 
                             The NMRA is excited to be in Texas again after a few years. It is going to be a great time in San Antonio at the Thousand Oaks YMCA and San Antonio College. 
                              For all the information you need on this tournament, you can go to <a href="www.nmra.info" target="new">NMRA.info</a>',
               ];


        //$videos->push($video);
        array_push($videos, $video);       

        //Fran Camp 2019
        $video = (object)[
                        'id' => '316331857',
                        'src' => 'https://player.vimeo.com/video/316331857?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1',
                        'title' => 'Coach Fran Davis 3-Day Camp at the Landmark Club in Dallas, TX March 8-10',
                        'title_link' => 'http://www.r2sports.com/website/event-website.asp?TID=30465',
                        'callout' =>'<ul><li>3-Day Camp includes 13+ hours of instruction, court time and play the pro, 
                                       physical and mental aspects of the game, videotaping and analysis, and more.                                       
                                       <li>Also, TXRA will reimburse you 100% the cost for to become a USAR-IP certified instructor. The USAR-IP Level 2-3 Certification class is available March 7-8.
                                       <li>Go to the <b>Future Events</b> section at the bottom of the page for event details and registration links.
                                    </ul>
                                    ',
               ];

        //$videos->push($video);
        array_push($videos, $video);  
        
        $rand_indx = rand(0,count($videos)-1);
        $video = $videos[$rand_indx];

        shuffle($videos);
    	return view('welcome', compact('tournaments', 'trending', 'recent','spotlight','tip', 'video', 'videos'));
    }
}
