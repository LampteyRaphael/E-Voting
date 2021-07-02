<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member1 extends Model
{
    //
    protected $fillable=[
        'name',
        'staffid',
        'photo_id',
    ];


    public function photo(){

        return $this->belongsTo('App\Photo');

    }
}
