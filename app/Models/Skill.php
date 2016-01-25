<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];

    public function Skill_category()
    {
        return $this->belongsTo('App\Models\Skill_category','cate_id');
    }

    public function user_skills()
    {
        return $this->hasMany('App\Models\User_skill','skill_id');
    }
}
