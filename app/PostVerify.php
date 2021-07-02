<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostVerify extends Model
{
    //
    protected $fillable=[
        'verify_code',
        'user_id',
//        'hide'
    ];


    public function photo(){

        return  $this->belongsTo('App\Photo');

    }


}
