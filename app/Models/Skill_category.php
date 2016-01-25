<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill_category extends Model
{
    protected $guarded = [];

    public function skill()
    {
        return $this->hasMany('App\Models\Skill','cate_id');
    }
}
