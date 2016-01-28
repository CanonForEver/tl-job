<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function Skill_category()
    {
        return $this->belongsTo('App\Models\Skill_category','cate_id');
    }

    //与当前用户技能表的关联
    public function user_skills()
    {
        return $this->hasMany('App\Models\User_skill');
    }
}
