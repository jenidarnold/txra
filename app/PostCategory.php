<?php namespace App;

//use Illuminate\Database\Eloquent\Model;

class PostCategory extends \Eloquent 
{
    public function posts()
    {
        return $this->belongsToMany( 'App\Post', 'post_category', 'category_id', 'post_id');
    }
}
