<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_shokushu extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'shokushu_id',
    ];
}
