<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $timestamps = false;

    //与当前用户技能表的关联
    public function user_skills()
    {
        return $this->hasMany('App\Models\User_skill');
    }
}
