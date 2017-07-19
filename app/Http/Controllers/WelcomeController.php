<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Tournament;
use App\News;
use App\BlogCategory;

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
        $tournaments =  Tournament::all();
        $categories = new BlogCategory;

        //Trending
        $trending =  $mostRecommended = News::mostRecommended();
        
        //Recent
        $recent      = News::lastPosts(1);

        //Spotlight
        $spot_id = $categories
        	->where('category', '=', 'Player Spotlight' )
        	->first()
        	->id
        ;

        $spotlight =  $categories->find($spot_id)->blogs()
                ->orderBy('created_at','desc')
                ->where('public', 1)
                ->first();

        //Tip of the Day
        $tip_id = $categories
        	->where('category', '=', 'Tip of the Day' )
        	->first()
        	->id
        ;

        $tip =  $categories->find($tip_id)->blogs()
                ->orderBy('created_at','desc')
                ->where('public', 1)
                ->first();



    	return view('welcome', compact('tournaments', 'trending', 'recent','spotlight','tip'));
    }
}
