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


        $videos = collect();
        
        //State Singles 2019
        $video = (object)[
                        'id' => '313409692',
                        'src' => 'https://player.vimeo.com/video/313409692?autoplay=1&loop=1&title=0&byline=0&portrait=0',
                        'title' => '2019 Texas State Singles Racquetball Championships (TSSRC), March 22-24',
                        'title_link' => 'http://www.r2sports.com/website/event-website.asp?TID=30330',
                        'callout' =>'The premiere singles tournament for racquetball, hosted at Texas A&M in College Station, Texas.  The deadline for this event will be Monday, March 18th @10pm.',
               ];

        $videos->push($video);       

        //Fran Camp 2019
        $video = (object)[
                        'id' => '316331857',
                        'src' => 'https://player.vimeo.com/video/316331857?autoplay=1&loop=1&title=0&byline=0&portrait=0',
                        'title' => 'Coach Fran Davis 3-Day Camp at the Landmark Club in Dallas, Tx March 8-10, 2019',
                        'title_link' => 'http://www.r2sports.com/website/event-website.asp?TID=30465',
                        'callout' =>'WHAT DOES A THREE-DAY CAMP INCLUDE?<br/>
                                        13+ hours of instruction, court time and play the pro
                                        Physical and mental aspects of the game
                                        Videotaping and analysis',
               ];

        $videos->push($video);


    	return view('welcome', compact('tournaments', 'trending', 'recent','spotlight','tip', 'video'));
    }
}
