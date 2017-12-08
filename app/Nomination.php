<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_id', 'category_id', 
        'nominee_first_name', 'nominee_last_name',
		'proposer_user_id', 'proposer_email','proposer_phone','proposer_first_name','proposer_last_name','proposer_is_member',
		'comments'
    ];

    /**
     * Proposer's fullname
     *
     */
    public function getProposerFullNameAttribute() {
        return $this->proposer_first_name . ' ' . $this->proposer_last_name;
    }

    /**
     * Nominees's fullname
     *
     */
    public function getNomineeFullNameAttribute() {
        return $this->nominee_first_name . ' ' . $this->nominee_last_name;
    }
}
