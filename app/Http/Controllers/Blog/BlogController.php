<?php namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class BlogController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
		
	/**
	 * Display index of blogs.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('blog/index', compact('blog'));
	}

	/**
	 * Display blog
	 *
	 * @return Response
	 */
	public function show($id)
	{

		return view('blog/show', compact('blog'));
	}
}