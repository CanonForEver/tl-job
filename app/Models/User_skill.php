<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_skill extends Model
{
    protected $guarded = [];

    public function skill()
    {
        return $this->belongsTo('App\Models\Skill');
    }
}
