<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill_category extends Model
{
    public $timestamps = false;

    //有很多个职业技能
    public function skills()
    {
        return $this->hasMany('App\Models\Skill', 'cate_id');
    }
}
