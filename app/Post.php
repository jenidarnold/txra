<?php namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author alireza
 */
class Post extends \Eloquent {
    //put your code here
    protected  $table = 'post';
   
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    // return url of blog post 
    public function getUrl(){
        //return \Config::get('app.url') .'/blog/post/'. $this->id . '/' . \Serverfireteam\blog\BlogController::seoUrl($this->title);
        //return '/blog/post/'. $this->id . '/' . \Serverfireteam\blog\BlogController::seoUrl($this->title);

        return \Config::get('app.url') .'/news/post/'. $this->id . '/' . \App\Http\Controllers\News\BlogController::seoUrl($this->title);
    }
    
    public static  function mostRecommended($public = 1){
        return  self::orderBy('socialPoint','desc')->where('public', $public)->take(1)->get()->first();
    }
    public function nextPost($public = 1){
        // get next post
        return self::where('id', '>', $this->id)->where('public', $public)->orderBy('id','asc')->take(1)->get()->first();
    }
    public  function previousPost($public = 1){
        // get previous  post 
        return self::where('id', '<', $this->id)->where('public', $public)->orderBy('id','desc')->take(1)->get()->first();
    }
    
    public static  function lastPosts($number = null) {       
        if ( $number != null ){
            return self::take($number)
                    ->orderBy('created_at','desc')
                    ;                        
        } else {
            return self::orderBy('created_at','desc')
                    ;            
        }
    }

    //FIX
    public static  function lastPostsByCategory($id, $number = null) {              
        if ( $number != null ){
            return self::take($number)
                    ->where('public', 1)
                    ->orderBy('created_at','desc')->get();                        
        } else {
            return self::orderBy('created_at','desc')
                        ->where('public', 1)
                        ->get();            
        }
    }

    public function categories()
    {
        return $this->belongsToMany( 'App\PostCategory', 'post_category', 'post_id', 'category_id');
    }

    public function image_count() {
        $directory = $this->image_path();
        $filecount = 0;
        
        if (\File::exists($directory)) {
            $fi = new \FilesystemIterator($directory, \FilesystemIterator::SKIP_DOTS);
            $filecount = iterator_count($fi);
        }
      
        return $filecount;
    }

     public function image_path() {
        $directory = "images/blog/$this->id/";
        
        if (\File::exists("images/blog/$this->id/lead")) {
           $directory = "images/blog/$this->id/lead/";
        }
        elseif (\File::exists("images/blog/$this->id")) {
            $directory = "images/blog/$this->id/";
        }

        return $directory;
    }

    public function image_max() {

        $max = 6;

        if ($this->image_count() > $max) {
            return $max;
        } else{
            return $this->image_count();
        }        
    }

    public function author()
    {
        return $this->hasOne('App\User', 'id', 'author_id');
    }

    public function getCreatedAttribute()
    {
        return $this->created_at->format('m/d/y');
    }
}
