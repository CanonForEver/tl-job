<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_skill extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'skill_id',
        'value',
    ];
}
