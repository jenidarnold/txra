<?php namespace App\Http\Controllers\Members;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use App\User;

class MemberController extends Controller {

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
	 * Display index of members.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$members = User::orderBy('name');

		return view('members/profiles/index', compact('members'));
	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function matches(Request $request)
	{

		return view('members/matches');
	}

	/**
	 * After member login, redirect to their profile page
	 *
	 * @return Response
	 */
	public function home(Request $request)
	{


		if(\Auth::check()){

			$id =  \Auth::user()->id ; 
			if (\Auth::user()->last_name == 'Member' ) {
				return view('welcome');
			} else {
				return redirect()->route('members.show', ['id' =>  $id ]);
			}

		}else{			
			return view('auth/login');
		}

	}

	/**
	 * Display member profile.
	 *
	 * @return Response
	 */
	public function show($id)
	{

		$user = User::find($id);

		//TODO add gender to user table
		$user->gender = 'f';
		return view('members/profiles/show', compact('user'));
	}

	/**
	 * Display member profile edit.
	 *
	 * @return Response
	 */
	public function edit($id)
	{

		$user = User::find($id);

		//TODO add gender to user table
		$user->gender = 'f';
		return view('members/profiles/edit', compact('user'));
	}

	/**
	 * Display member rankings.
	 *
	 * @return Response
	 */
	public function rankings(Request $request)
	{

		return view('members/rankings');
	}


	/**
	 * Display index of memberships.
	 *
	 * @return Response
	 */
	public function membership(Request $request)
	{

		return view('memberships/index');
	}
}