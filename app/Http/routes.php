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


Route::get('/', function () {
    return view('coming-soon');
});

Route::get('/sitemap.xml', 'SitemapController@index');

Route::get('/welcome', 'WelcomeController@index' );

	
//Route::group(['namespace' => 'Blog', 'prefix' =>'blog'], function()
//{
	Route::get('/news', array('as' => 'news.index', 'uses' => 'News\BlogController@getIndex'));	
	Route::get('/news/category/{id}/{category}', array('as' => 'news.category', 'uses' => 'News\BlogController@getCategory'));	
	Route::get('/news/drafts', array('as' => 'news.drafts', 'uses' => 'News\BlogController@getDrafts'));
	Route::get('/news/post/{id}/{title}', array('as' => 'news.show', 'uses' => 'News\BlogController@getPost'));	
	Route::get('/news/share/{id}/{social}', array('as' => 'news.share', 'uses' => 'News\BlogController@getShare'));	
	Route::get('news/post/{id}/image/{file}/delete', array('as' => 'news.delete_image', 'uses' => 'News\BlogController@delete_image'));
    
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
 if (\Request::is('admin/*'))
{
 //  \Config::set('panel.controllers', 'App\Http\Controllers\Blog\panel');
 
  //  \Config::set('panel.controllers', 'Serverfireteam\blog\panel');
}


/* Admin */
Route::group(['namespace' => 'Admin', 'prefix' =>'admin'], function()
{
	Route::get('/', array('as' => 'admin.index', 'uses' => 'AdminController@index'));
	Route::get('/users', array('as' => 'admin.users', 'uses' => 'AdminController@users'));
	Route::get('/invites', array('as' => 'admin.invites', 'uses' => 'AdminController@invites'));

	Route::post('/users/import', array('as' => 'import.users', 'uses' => 'ImportController@import_users'));	
	Route::post('/invites/import', array('as' => 'import.invites', 'uses' => 'ImportController@import_invites'));

	Route::get('/invites/invite', array('as' => 'invite', 'uses' => 'InviteController@invite'));
	Route::post('/invite', array('as' => 'invite.process', 'uses' => 'InviteController@process'));
});	
Route::get('accept/{token}', 'Admin\InviteController@accept')->name('invite.accept');


Route::controller('/admin', 'News\panel\BlogController');

//Route::controller('/blog', 'Blog\BlogController');

Route::get('/logout', function () {
	\Auth::logout();
    return view('welcome');
});

/* Play */
Route::group(['namespace' => 'Play', 'prefix' =>'play'], function()
{
	Route::get('basics', array('as' => 'play.basics', 'uses' => 'PlayController@basics'));	
	Route::get('rules', array('as' => 'play.rules', 'uses' => 'PlayController@rules'));	
	Route::get('levels', array('as' => 'play.levels', 'uses' => 'PlayController@levels'));	
	Route::get('instructors', array('as' => 'play.instructors', 'uses' => 'PlayController@instructors'));	
	Route::get('map', array('as' => 'play.map', 'uses' => 'PlayController@map'));	
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
});



/* Members */
Route::group(['namespace' => 'Members', 'prefix' =>'members'], function()
{	
	Route::get('home', array('as' => 'members.listing', 'uses' => 'MemberController@home'));
	Route::get('/', array('as' => 'members.listing', 'uses' => 'MemberController@index'));
	Route::get('/', array('as' => 'members.listing', 'uses' => 'MemberController@index'));

	Route::get('/search/', array('as' => 'members.search', 'uses' => 'MemberController@search'));		
	Route::get('profile/{id}/', array('as' => 'members.show', 'uses' => 'MemberController@show'));	
	Route::get('profile/{id}/create', array('as' => 'members.create', 'uses' => 'MemberController@create'));	
	Route::get('profile/{id}/edit', array('as' => 'members.edit', 'uses' => 'MemberController@edit'));
	Route::post('profile/', array('as' => 'members.store', 'uses' => 'MemberController@store'));
	Route::post('profile/{id}', array('as' => 'members.update', 'uses' => 'MemberController@update'));
	Route::post('profile/{id}/pwd', array('as' => 'members.update_pwd', 'uses' => 'MemberController@update_pwd'));

	Route::post('profile/{id}/avatar/upload', array('as' => 'members.update_avatar', 'uses' => 'MemberController@update_avatar'));
	Route::get('profile/{id}/avatar/delete', array('as' => 'members.delete_avatar', 'uses' => 'MemberController@delete_avatar'));

	Route::post('profile/{id}/usar', array('as' => 'members.link_usar', 'uses' => 'MemberController@link_usar'));

	//Route::get('matches', array('as' => 'members.matches', 'uses' => 'MemberController@matches'));	
	//Route::get('gallery', array('as' => 'members.gallery.index', 'uses' => 'GalleryController@index'));
	Route::put('addphoto', array('as' => 'members.gallery.create', 'uses' => 'GalleryController@create'));	

	Route::get('membership', array('as' => 'members.membership', 'uses' => 'MemberController@membership'));		


	Route::get('rankings/', array('as' => 'members.rankings', 'uses' => 'RankingsController@index'));
	Route::get('rankings/temp', array('as' => 'members.rankings.temp', 'uses' => 'RankingsController@temp'));
	Route::get('download/rankings/{group_id}', array('as' => 'events.download.rankings', 'uses' => 'RankingsController@download'));

});

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

	Route::get('/emails/confirmation', function () {
	    return view('emails.confirmation');
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
});





/* must be last? */
Route::auth();
