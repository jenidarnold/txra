<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'grants';


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'amount', 'title', 'body', 'need_date', 'is_member' , 'phone', 'email'];

    public function submitter()
    {
		return $this->hasOne('App\User', 'id', 'user_id');
    }
}
