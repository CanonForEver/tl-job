<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_keitai extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'keitai_id',
    ];

}
