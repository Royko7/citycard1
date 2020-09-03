<?php

namespace App;

use App\Models\Card;
use App\Models\City;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\Relation;

class User extends Authenticatable
{

    use Notifiable;


    /**
     *
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'email', 'password', 'role',
    ];

    /**(
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * @var mixed
     */
    private $role;

    public function card()
    {
        return $this->hasMany('App\Models\Card', 'user_id');
    }

    public function cabinet()
    {
        return $this->hasOne('App\Cabinet');
    }



//    public  function getUserCard()
//    {
//            return $this->card()->id;
//    }


}

