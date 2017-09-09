<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token',
        'first_name',
        'last_name',
        'email',
        'accepted',
        'accepted_at',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'token';
    }

    /**
     * Many to many relationship to Role model.
     *
     * @return object
     */
    // public function roles()
    // {
    //     return $this->belongsToMany(Roles::class)
    // }

    /**
     * Add a new invite and attach role(s) if applicable.
     *
     * @param object $request
     * @return object $invite
     */
    public function addNew($request)
    {
        $invite = $this->create($request->all());
        // if($request->has('roles')) {
        //     $invite->roles()->attach($request->roles);
        //     return $invite->load('roles');
        // }
        return $invite;
    }

    /**
     * Process an invited request to sign up/register
     * Find the invite by email, update accepted st and accepted boolean
     * Create a new User on the user model
     * Add applicable roles and return user object
     *
     * @param object $request
     * @return User $user
     */
    public function processInvited($request)
    {
        //$invited = $this->with('roles')->where('email', $request->email)->first();
        $invited = $this->where('email', $request->email)->first();

        if($invited) {
            $invited->update(['accepted' => 1, 'accepted_at' => \Carbon\Carbon::now()->toDateTimeString()]);

            $

            $user = User::create([
                'name' => $invite->name,
                'email' => $invite->email,
                'password' => $request->password,
                'active' => 1,
            ]);
            // if($invited->roles) {
            //     $user->roles()->attach($invited->roles());
            // }
            return $user;
        }
        return abort('404', 'No invite was found');

    }
}
