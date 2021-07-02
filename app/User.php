<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name','another_name',  'email', 'password','status','pin_verify'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photo(){

        return  $this->belongsTo('App\Photo');

    }

    public function getNameAttribute($value){

        return ucwords($value);
    }

    public function setNameAttribute($value){

        return $this->attributes['name']=ucfirst($value);
    }

}
