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
            ->get();
        $tournaments["future"] = Tournament::future()
            ->where('name', 'not like', '%Ladder')
            ->get();
        $tournaments["recent"] = Tournament::past(90)
            ->where('name', 'not like', '%Ladder')
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



    	return view('welcome', compact('tournaments', 'trending', 'recent','spotlight','tip'));
    }
}
