<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get('/', function () {
// 	 return view('coming-soon');
// });

Route::get('/sitemap.xml', 'SitemapController@index');


Route::get('/PICK-A-FREE-TOURNEY', function () {
	//return view('promos/free_tourney/terms');
    return view('promos/free_tourney/index');
});
Route::get('/sweepstakes', function () {
    //return view('promos/free_tourney/index');
    return view('promos/free_tourney/terms');
});
Route::get('/contest-rules', function () {
    return view('promos/free_tourney/terms');
});

Route::get('/', 'WelcomeController@index' );
Route::get('/welcome', 'WelcomeController@index' );
Route::get('/survey',  function () {
    return view('survey');
});
	
//Route::group(['namespace' => 'Blog', 'prefix' =>'blog'], function()
//{
	Route::get('/news', array('as' => 'news.index', 'uses' => 'News\BlogController@getIndex'));	
	Route::get('/news/category/{id}/{category}', array('as' => 'news.category', 'uses' => 'News\BlogController@getCategory'));	
	Route::get('/news/drafts', array('as' => 'news.drafts', 'uses' => 'News\BlogController@getDrafts'));
	Route::get('/news/post/{id}/{title}', array('as' => 'news.show', 'uses' => 'News\BlogController@getPost'));	
	Route::get('/news/share/{id}/{social}/{ismobile}', array('as' => 'news.share', 'uses' => 'News\BlogController@getShare'));	
	Route::get('/news/post/{id}/image/{file}/delete', array('as' => 'news.delete_image', 'uses' => 'News\BlogController@delete_image'));
    
    //don't use the Panel code
	Route::get('/news/create', array('as' => 'news.create', 'uses' => 'News\PageController@create'));	
	Route::get('/news/edit/{id}/{title}', array('as' => 'news.edit', 'uses' => 'News\PageController@edit'));		
	Route::post('/news/post', array('as' => 'news.store', 'uses' => 'News\PageController@store'));		
	Route::post('/news/post/{id}', array('as' => 'news.update', 'uses' => 'News\PageController@update'));
	Route::delete('/news/{id}', array('as' => 'news.delete', 'uses' => 'News\PageController@delete'));	
	Route::get('/news/post/{id}/publish/{publish}', array('as' => 'news.publish', 'uses' => 'News\PageController@publish'));	
//});

Route::controllers([
//	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	//'scraper' => 'Admin\ScreenScrapeController',
]);

// config panel to load from our namespace for panel 
//  if (\Request::is('admin/*'))
// {
//  //  \Config::set('panel.controllers', 'App\Http\Controllers\Blog\panel');
 
//   //  \Config::set('panel.controllers', 'Serverfireteam\blog\panel');
// }

/* API */
Route::get('/api/clubs/get', array('uses' => 'Play\MapController@getClubs'));
Route::post('/api/clubs/checkin', array('uses' => 'Play\MapController@checkin'));


/* Admin */
Route::group(['namespace' => 'Admin', 'prefix' =>'admin'], function()
{
	Route::get('/', array('as' => 'admin.index', 'uses' => 'AdminController@index'));

	/* users */
	Route::get('/users', 					array('as' => 'admin.users', 			'uses' => 'AdminController@users'));
	Route::get('/users/{id}/edit', 			array('as' => 'admin.users.edit', 		'uses' => 'AdminController@edit_user'));
	Route::delete('/users/{id}/', 			array('as' => 'admin.users.delete', 	'uses' => 'AdminController@delete_user'));	
	Route::post('/users/{id}/', 			array('as' => 'admin.users.update', 	'uses' => 'AdminController@update_user'));
	Route::post('/users/import', 			array('as' => 'import.users', 			'uses' => 'ImportController@import_users'));	

	/* invites */
	Route::get('/invites', 					array('as' => 'admin.invites', 			'uses' => 'AdminController@invites'));
	Route::get('/invites/{id}/create', 		array('as' => 'admin.invites.create', 	'uses' => 'AdminController@create_invite'));
	Route::post('/invites/', 				array('as' => 'admin.invites.store', 	'uses' => 'AdminController@store_invite'));
	Route::get('/invites/{id}/edit', 		array('as' => 'admin.invites.edit', 	'uses' => 'AdminController@edit_invite'));
	Route::delete('/invites/{id}/', 		array('as' => 'admin.invites.delete', 	'uses' => 'AdminController@delete_invite'));	
	Route::post('/invites/import', 			array('as' => 'import.invites', 		'uses' => 'ImportController@import_invites'));
	Route::post('/invites/{id}/edit', 		array('as' => 'admin.invites.update', 	'uses' => 'AdminController@update_invite'));

	Route::get('/invites/invite', 			array('as' => 'invite', 				'uses' => 'InviteController@invite'));
	Route::post('/invite', 					array('as' => 'invite.process', 		'uses' => 'InviteController@process'));
	Route::get('/invite/{id}', 				array('as' => 'invite.send', 			'uses' => 'InviteController@send'));

	/*events/tournaments*/
	Route::get('/events',					array('as' => 'admin.events', 			'uses' => 'EventController@index'));
	Route::get('/events/{id}/create', 		array('as' => 'admin.events.create', 	'uses' => 'EventController@create'));	
	Route::post('/events/', 				array('as' => 'admin.events.store', 	'uses' => 'EventController@store'));
	Route::get('/events/{id}/edit',			array('as' => 'admin.events.edit', 		'uses' => 'EventController@edit'));
	Route::delete('/events/{id}/', 			array('as' => 'admin.events.delete', 	'uses' => 'EventController@delete'));	
	Route::post('/events/{id}/', 			array('as' => 'admin.events.update', 	'uses' => 'EventController@update'));

	/*clubs*/
	Route::get('/clubs',					array('as' => 'admin.clubs', 			'uses' => 'ClubController@index'));
	Route::get('/clubs/create', 			array('as' => 'admin.clubs.create', 	'uses' => 'ClubController@create'));	
	Route::post('/clubs/', 					array('as' => 'admin.clubs.store', 		'uses' => 'ClubController@store'));
	Route::get('/clubs/{id}/edit',			array('as' => 'admin.clubs.edit', 		'uses' => 'ClubController@edit'));
	Route::delete('/clubs/{id}/', 			array('as' => 'admin.clubs.delete', 	'uses' => 'ClubController@delete'));	
	Route::post('/clubs/{id}/', 			array('as' => 'admin.clubs.update', 	'uses' => 'ClubController@update'));

	/*email*/
	Route::get('/email',					array('as' => 'admin.email', 				'uses' => 'EmailController@index'));
	Route::post('/email',					array('as' => 'admin.email.send', 			'uses' => 'EmailController@send'));

	/*rankings*/
	Route::get('/rankings', 				array('as' => 'admin.rankings', 			'uses' => 'AdminController@rankings'));

	/*nominations*/
	Route::get('/nominations', 				array('as' => 'admin.nominations', 			'uses' => 'AdminController@nominations'));

	/*instructors*/
	Route::get('/instructors', 				array('as' => 'admin.instructors', 			'uses' => 'InstructorController@index'));
	Route::get('/instructors/{id}/create', 	array('as' => 'admin.instructors.create', 	'uses' => 'InstructorController@create'));	
	Route::post('/instructors/', 			array('as' => 'admin.instructors.store', 	'uses' => 'InstructorController@store'));
	Route::get('/instructors/{id}/edit',	array('as' => 'admin.instructors.edit', 	'uses' => 'InstructorController@edit'));
	Route::delete('/instructors/{id}/', 	array('as' => 'admin.instructors.delete', 	'uses' => 'InstructorController@delete'));	
	Route::post('/instructors/{id}/', 		array('as' => 'admin.instructors.update', 	'uses' => 'InstructorController@update'));
	
	/*referees*/
	Route::get('/referees', 				array('as' => 'admin.referees', 			'uses' => 'RefereeController@index'));
	Route::get('/referees/create', 	array('as' => 'admin.referees.create', 	'uses' => 'RefereeController@create'));	
	Route::post('/referees/', 			array('as' => 'admin.referees.store', 	'uses' => 'RefereeController@store'));
	Route::get('/referees/{id}/edit',	array('as' => 'admin.referees.edit', 	'uses' => 'RefereeController@edit'));
	Route::delete('/referees/{id}/', 	array('as' => 'admin.referees.delete', 	'uses' => 'RefereeController@delete'));	
	Route::post('/referees/{id}/', 		array('as' => 'admin.referees.update', 	'uses' => 'RefereeController@update'));



});	

Route::get('accept/{token}', 'Admin\InviteController@accept')->name('invite.accept');
Route::get('register/{token}', 'Members\ReferralController@register')->name('refer.register');


Route::controller('/admin', 'News\panel\BlogController');

//Route::controller('/blog', 'Blog\BlogController');

Route::get('/logout', function () {
	\Auth::logout();
    return view('welcome');
});

/* Play */
Route::get('/map', array('as' => 'play.map', 'uses' => 'Play\PlayController@map'));	
Route::get('/checkin', array('as' => 'play.checkin', 'uses' => 'Play\MapController@index'));	
Route::get('/instructors', array('as' => 'play.instructors', 'uses' => 'Play\PlayController@instructors'));
Route::group(['namespace' => 'Play', 'prefix' =>'play'], function()
{
	Route::get('basics', array('as' => 'play.basics', 'uses' => 'PlayController@basics'));	
	Route::get('rules', array('as' => 'play.rules', 'uses' => 'PlayController@rules'));	
	Route::get('levels', array('as' => 'play.levels', 'uses' => 'PlayController@levels'));	
	Route::get('instructors', array('as' => 'play.instructors', 'uses' => 'PlayController@instructors'));	
	Route::get('map', array('as' => 'play.map', 'uses' => 'PlayController@map'));	
	
	Route::get('checkin', array('as' => 'play.mylocation', 'uses' => 'MapController@index'));	
	Route::post('checkin', array('as' => 'play.checkin', 'uses' => 'MapController@checkin'));	

	Route::get('leagues', array('as' => 'play.leagues.index', 'uses' => 'LeaguesController@index'));	
});



/* Programs */
Route::group(['namespace' => 'Programs', 'prefix' =>'programs'], function()
{
	Route::get('juniors', array('as' => 'juniors.index', 'uses' => 'JuniorsController@index'));
	Route::get('juniors/welcome', array('as' => 'juniors.welcome', 'uses' => 'JuniorsController@welcome'));		
	Route::get('juniors/team', array('as' => 'juniors.team', 'uses' => 'JuniorsController@team'));		

	Route::get('collegiate/welcome', array('as' => 'collegiate.welcome', 'uses' => 'CollegiateController@welcome'));
	Route::get('collegiate', array('as' => 'collegiate.index', 'uses' => 'CollegiateController@index'));

	Route::get('instructors', array('as' => 'programs.instructors', 'uses' => 'InstructorsController@index'));	
	Route::get('awards', array('as' => 'awards.index', 'uses' => 'AwardsController@index'));	
	Route::get('referee', array('as' => 'referee.index', 'uses' => 'RefereeController@index'));		
	Route::get('referee/juniors', array('as' => 'referee.juniors', 'uses' => 'RefereeController@juniors'));	
	Route::get('referee/adults', array('as' => 'referee.adults', 'uses' => 'RefereeController@adult'));	

	Route::get('rewards', array('as' => 'rewards.index', 'uses' => 'RewardsController@index'));
	Route::get('rewards/{id}', array('as' => 'rewards.show', 'uses' => 'RewardsController@show'));
});


Route::get('rewards', array('as' => 'rewards.index', 'uses' => 'Programs\RewardsController@index'));
Route::get('referees', array('as' => 'referees', 'uses' => 'Programs\RefereeController@listing'));	
Route::get('refer', array('as' => 'refer.index', 'uses' => 'Members\ReferralController@index'));	
Route::get('refer-a-friend', array('as' => 'refer.index', 'uses' => 'Members\ReferralController@index'));

/* Members */
Route::group(['namespace' => 'Members', 'prefix' =>'members'], function()
{	
	Route::get('home', array('as' => 'members.listing', 'uses' => 'MemberController@home'));
	Route::get('/', array('as' => 'members.listing', 'uses' => 'MemberController@index'));

	Route::get('/search/', array('as' => 'members.search', 'uses' => 'MemberController@search'));		
	Route::get('profile/{id}/', array('as' => 'members.show', 'uses' => 'MemberController@show'));	
	Route::get('profile/{id}/create', array('as' => 'members.create', 'uses' => 'MemberController@create'));	
	Route::get('profile/{id}/edit', array('as' => 'members.edit', 'uses' => 'MemberController@edit'));
	Route::post('profile/', array('as' => 'members.store', 'uses' => 'MemberController@store'));
	Route::post('profile/{id}', array('as' => 'members.update', 'uses' => 'MemberController@update'));
	Route::post('profile/{id}/edit/pwd', array('as' => 'members.update_pwd', 'uses' => 'MemberController@update_pwd'));
	Route::post('profile/{id}/create/pwd', array('as' => 'members.store_pwd', 'uses' => 'MemberController@store_pwd'));
	Route::get('profile/{id}/create/pwd', array('as' => 'members.create_pwd', 'uses' => 'MemberController@create_pwd'));

	Route::post('profile/{id}/avatar/upload', array('as' => 'members.update_avatar', 'uses' => 'MemberController@update_avatar'));
	Route::get('profile/{id}/avatar/delete', array('as' => 'members.delete_avatar', 'uses' => 'MemberController@delete_avatar'));
	Route::post('profile/{id}/usar', array('as' => 'members.link_usar', 'uses' => 'MemberController@link_usar'));

	//Route::get('matches', array('as' => 'members.matches', 'uses' => 'MemberController@matches'));	
	//Route::get('gallery', array('as' => 'members.gallery.index', 'uses' => 'GalleryController@index'));
	Route::put('addphoto', array('as' => 'members.gallery.create', 'uses' => 'GalleryController@create'));	

	Route::get('membership', array('as' => 'members.membership', 'uses' => 'MemberController@membership'));	
	Route::post('dowload/members/', array('as' => 'scrape.members', 'uses' => 'MemberController@r2_emails'));		


	Route::get('rankings/', array('as' => 'members.rankings', 'uses' => 'RankingsController@index'));
	Route::get('rankings/temp', array('as' => 'members.rankings.temp', 'uses' => 'RankingsController@temp'));
	Route::get('download/rankings/{group_id}/{location_id}', array('as' => 'events.download.rankings', 'uses' => 'RankingsController@download'));

	Route::get('/refer', array('as' => 'refer.index', 'uses' => 'ReferralController@index'));		
	Route::get('refer/{id}/', array('as' => 'refer.show', 'uses' => 'ReferralController@show'));	
	Route::post('refer/{id}/', array('as' => 'refer.email', 'uses' => 'ReferralController@send_email'));


	Route::get('{param}', array('as' => 'members.show', 'uses' => 'MemberController@show'));	

});


	Route::get('/member/{param}', array('as' => 'members.show', 'uses' => 'Members\MemberController@show'));

/* Events */
Route::group(['namespace' => 'Events', 'prefix' =>'events'], function()
{
	Route::get('{type}', array('as' => 'events.index', 'uses' => 'EventController@index'));	
	Route::get('download/{location}/{type}', array('as' => 'events.download', 'uses' => 'EventController@download'));	
	Route::get('tournament/{id}/', array('as' => 'events.show', 'uses' => 'EventController@show'));
	Route::get('tournament/{id}/scores', array('as' => 'events.scores', 'uses' => 'EventController@scores'));
	Route::get('tournament/{id}/participants', array('as' => 'events.participants', 'uses' => 'EventController@participants'));
	Route::get('tournament/{id}/gallery', array('as' => 'events.gallery', 'uses' => 'EventController@gallery'));
});

/* ABOUT */
Route::group(['namespace' => 'About', 'prefix' =>'about'], function()
{
	Route::get('board', array('as' => 'board.index', 'uses' => 'LeadershipController@board'));	
	Route::get('bylaws', array('as' => 'about.bylaws', 'uses' => 'LeadershipController@bylaws'));	
	Route::get('committees', array('as' => 'committees.index', 'uses' => 'LeadershipController@committees'));
	Route::post('committees', array('as' => 'committees.join', 'uses' => 'LeadershipController@joinCommittees'));
	Route::get('volunteer', array('as' => 'volunteer.index', 'uses' => 'LeadershipController@volunteer'));
	Route::get('election/process', array('as' => 'election.index', 'uses' => 'LeadershipController@election'));	
	Route::get('ethics', array('as' => 'about.ethics', 'uses' => 'LeadershipController@ethics'));	
	Route::get('mission', array('as' => 'about.mission', 'uses' => 'LeadershipController@mission'));	
});

/* DONTATE */
Route::group(['namespace' => 'Donate', 'prefix' =>'donate'], function()
{
	Route::get('/', array('as' => 'donate.index', 'uses' => 'DonateController@index'));	
});

/* FAQ */
Route::group(['namespace' => 'Faq', 'prefix' =>'faq'], function()
{
	Route::get('/articles', array('as' => 'faq.articles', 'uses' => 'FAQController@index'));	
});

/* FORMS */
Route::group(['namespace' => 'Forms', 'prefix' =>'forms'], function()
{
	Route::get('election/nominate', array('as' => 'election.nominate', 'uses' => 'NominationController@election'));	
	Route::post('election/nominate', array('as' => 'election.nominate', 'uses' => 'NominationController@sendElection'));	
	Route::get('awards/nominate', array('as' => 'awards.nominate', 'uses' => 'NominationController@awards'));	
	Route::post('awards/nominate', array('as' => 'awards.nominate', 'uses' => 'NominationController@sendAward'));	
	Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@index'));	
});

Route::get('/contact', array('as' => 'contact', 'uses' => 'Forms\ContactController@index'));	
Route::post('/contact', array('as' => 'contact', 'uses' => 'Forms\ContactController@send'));

Route::get('/terms-of-use', function () {
    return view('misc.termsofuse');
});
Route::get('/privacy', function () {
    return view('misc.privacy');
});
Route::get('/unsubscribe', function () {
    return view('misc.unsubscribe');
});

/* home was a default page in Laravel; I removed; but just incase references go to Landing page */
Route::get('/home', 'WelcomeController@index');


Route::resource('subscribe', 'SubscribeController');




/* Email Previews */
Route::group(['middleware' => ['auth', 'admin_user']], function () {

	Route::get('/tmp/draft', function () {
	    return view('tmp.draft');
	});

	Route::get('/emails/invites/send', function () {
	    return view('emails.invites.send');
	});

	Route::get('/emails/accounts/created', function () {
	    return view('emails.accounts.created');
	});

	Route::get('/emails/password/reset', function () {
	    return view('auth.emails.password');
	});

	Route::get('/emails/contact/send', function () {
	    return view('emails.contact.send');
	});

	Route::get('/emails/committees/send', function () {
	    return view('emails.committees.sendvolunteer');
	});

	Route::get('/emails/committees/reply', function () {
	    return view('emails.committees.replyvolunteer');
	});

	Route::get('/emails/awards/send', function () {
	    return view('emails.awards.sendnomination');
	});

	Route::get('/emails/awards/reply', function () {
	    return view('emails.awards.replynomination');
	});

	Route::get('/emails/election/send', function () {
	    return view('emails.election.sendnomination');
	});

	Route::get('/emails/election/reply', function () {
	    return view('emails.election.replynomination');
	});

	Route::get('/emails/blog/send', function () {
	    return view('emails.blog.send');
	});

	Route::get('/emails/blog/reply', function () {
	    return view('emails.blog.reply');
	});

	Route::get('/emails/referrals/send', function () {
	    return view('emails.referrals.send');
	});

	Route::get('/emails/promos/pick-a-free/send', function () {
	    return view('emails.promos.pick-a-free.send');
	});
	Route::get('/emails/promos/pick-a-free/invite', function () {
	    return view('emails.promos.pick-a-free.invite');
	});

	Route::get('/files/{page}', function () {
	    return view('files.{page}');
	});
});

Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);

/* must be last? */
Route::auth();
