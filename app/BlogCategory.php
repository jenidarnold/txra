<?php namespace App;

//use Illuminate\Database\Eloquent\Model;

class BlogCategory extends \Eloquent 
{
    public function blogs()
    {
        return $this->belongsToMany( 'App\News', 'blog_category', 'category_id', 'blog_id');
    }
}
