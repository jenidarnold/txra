<?php namespace App;

use Guzzlehttp;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Stream\Stream;
use GuzzleHttp\Cookie\FileCookieJar;
//use GuzzleHttp\Client;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
//use Gidlov\Copycat\Copycat;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract, 
                                    AuthorizableContract,
                                    CanResetPasswordContract 
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'middle_name', 'prefix', 'suffix', 'dob', 'email', 'password', 'usar_id', 'disabled', 'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Create a new user instance; Called by ImportController
     *
     * @param  array  $data
     * @return User
     */
    public function create_profile(array $data)
    {
        /*\Event::fire(new UserWasRegistered($data)); */
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'disabled' => $data['disabled'],
            'usar_id' => $data['usar_id']
            ]);

        $profile = UserProfile::create([
            'user_id' => $user->id
            ]);

        //Create profile folder
        if (!file_exists("images/members/$user->id")) {
            mkdir("images/members/$user->id", 0777, true);
        }
        copy("images/avatar2.jpg","images/members/$user->id/profile.png"); 

        return $user;
    }

    /**
     * [link_Usar description]
     * @param  [type] $userId   [description]
     * @param  [type] $username [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    public static function link_Usar($userId, $username, $password) {

         $username = 'je****';
         $password = 'Ru****';

        $cookieFile = '/var/www/txra/jar.txt';
        $jar = new FileCookieJar($cookieFile, true);
        $url = 'https://www.r2sports.com/';
        // Need to add the token to the header?
        //X-CSRF-Token: [token]
        // Create a client with a base URI
        $client = new \GuzzleHttp\Client(['base_uri' => $url, 'cookies' => $jar ]);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'membership/login.asp', [
            'form_params' => [
                'userName' => $username,
                'password' => $password,
                'action' => 'membership/loginCheck.asp?TID=&sportOrganizationID=0&returnToRefPage=&directorID='
                ]           
        ]);
       
        //dd($response);
        $body = $response->getBody();
        dd($response);
       
       //  // Need to add the token to the header?
       //  //X-CSRF-Token: [token]
       //  // Create a client with a base URI
       //  //$client = new \GuzzleHttp\Client(['base_uri' => $url, 'cookies' => $jar ]);
       //  // Send a request to https://foo.com/api/test
       //  //$response = $client->request('GET', 'membership/loginCheck.asp?TID=&sportOrganizationID=0&returnToRefPage=&directorID=', [
       //  // $response = $client->request('POST', 'membership/login.asp', 
       //  //     ['debug' => false,
       //  //     'track_redirects' => true],
       //  //     [
       //  //     'form_params' => [
       //  //         'userName' => $username,
       //  //         'password' => $password,
       //  //         ]           
       //  // ]);

       //  $client = new Client();
    

       //  // $crawler = $client->request('POST', 'https://www.r2sports.com/tourney/login.asp?TID=21919'); 
       //  // $form = $crawler->filter('form')->form();
       //  // $crawler = $client->submit($form, array('uid' => $username, 'pwd' => $password ));

       //  // $crawler->filter('.flash-error')->each(function ($node) {
       //  //     var_dump( $node->text()."\n");
       //  // });

       //  // we don't use the trait method here since we want our
       //  // test to span two page requests, and we need to have
       //  // the session persist on the remote server
       //  // create a web client and hit the login page
       //  $url = "https://www.r2sports.com/tourney/login.asp?TID=21919";
       //  $client = new Client();
       //  $crawler = $client->request('POST', $url);
       //  $response_code = $client->getResponse()->getStatus();
       //  // we should get 200 back
       // // $this->assertEquals(200, $response_code);
       //  // select the form on the page and populate values
       //  // since we are using Goutte\Client, we don't need
       //  // to worry about parsing the HTML to find the csrf _token
       //  //$form = $crawler->selectButton('image')->form();
       //  $form = $crawler->filter('form')->form();
       //  $form->setValues(['uid' => 'jenida', 'pwd' => 'Ruph7874']);
       //  // submit the form
       //  $client->submit($form);
       //  $response_code_after_submit = $client->getResponse()->getStatus();
       //  // make sure the HTML page displayed (response code 200
       //  //$this->assertEquals(200, $response_code_after_submit);
       //  // make sure we can get to the testimonial page
       //  $client->request('GET', 'https://www.r2sports.com/tourney/Registration.asp?regUserLoginID=1633738&TID=21919&UID=192412&EDIT=Y');
       //  $response_code = $client->getResponse()->getStatus();
       //  //$this->assertEquals(200, $response_code);

       //  dd( $crawler->html());
    }

    /**
     * Link FB account to User Account; probablyy move to another loca
     * @param  [type] $userId   [description]
     * @return [type]           [description]
     */
    public static function link_account($fb_id) {
    
    }

    /**
     *  User's Profile
     */

    public function profile()
    {
        return $this->hasOne('App\UserProfile', 'user_id', 'id');
    }
          

    /**
     *  User's Usar account
     */

    public function usar()
    {
        return $this->hasOne('App\UsarMember', 'id', 'usar_id');
    }
      
    /**
     * User's permissions
     *
     */
    public function permissions() {
        return $this->hasMany('App\Permission', 'user_id', 'user_id');
    }

    /**
     * User's permissions
     *
     */
    public function hasPermission( $permission_id) {
        $result = 0;
        $result = \DB::table('permissions')
            ->where('user_id', '=', $this->id)
            ->where('permission_id', '=', $permission_id)
            ->count();
        if ($result > 0 ) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * User's fullname
     *
     */
    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }
}
