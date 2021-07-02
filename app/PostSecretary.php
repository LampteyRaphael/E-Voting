<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostSecretary extends Model
{
    protected $fillable=[
        'name',
        'user_id',
    ];
}
