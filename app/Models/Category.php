<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','sort_order'];
    public function job(){
        return $this->hasMany('App\Models\Job');
    }
}
