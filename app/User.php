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
        'first_name', 'last_name', 'middle_name', 'prefix', 'suffix', 'email', 'password', 'usar_id'
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
     * [link_Usar description]
     * @param  [type] $userId   [description]
     * @param  [type] $username [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    public static function link_Usar($userId, $username, $password) {

         $username = 'j***';
         $password = 'r***';

        $cookieFile = '/var/www/txra/jar.txt';
        $jar = new FileCookieJar($cookieFile, true);
        $url = 'https://www.r2sports.com/';
        // Need to add the token to the header?
        //X-CSRF-Token: [token]
        // Create a client with a base URI
        //$client = new \GuzzleHttp\Client(['base_uri' => $url, 'cookies' => $jar ]);
        // Send a request to https://foo.com/api/test
        //$response = $client->request('GET', 'membership/loginCheck.asp?TID=&sportOrganizationID=0&returnToRefPage=&directorID=', [
        // $response = $client->request('POST', 'membership/login.asp', 
        //     ['debug' => false,
        //     'track_redirects' => true],
        //     [
        //     'form_params' => [
        //         'userName' => $username,
        //         'password' => $password,
        //         ]           
        // ]);

        $client = new Client();
        $crawler = $client->request('GET', 'https://www.r2sports.com/membership/login.asp');    
        
        $html = new \DOMDocument('1.0','iso-8859-1');
        $html->formatOutput = true;

        $form = $html->createElement('form');
        $form->setAttribute('method', 'post');
        $form->setAttribute('action', 'membership/loginCheck.asp?TID=&sportOrganizationID=1&returnToRefPage=&directorID=');

        $fieldset = $html->createElement('fieldset');

        $name = $html->createElement('input');
        $name->setAttribute('type', 'text');
        $name->setAttribute('name', 'userName');

        $email = $html->createElement('input');
        $email->setAttribute('type', 'password');
        $email->setAttribute('name', 'password');

        $fieldset->appendChild($name);
        $fieldset->appendChild($email);

        $form->appendChild($fieldset);

        $form = new \Symfony\Component\DomCrawler\Form($form, 'https://www.r2sports.com/membership/login.asp', 'POST', 'https://www.r2sports.com');
        //$form->set($formInput);
     
        $crawler = $client->submit($form, array('userName' => $username, 'password' => $password ));

        $crawler->filter('.flash-error')->each(function ($node) {
            var_dump( $node->text()."\n");
        });

        dd( $crawler);
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
