<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keitai extends Model
{
    protected $fillable = ['name','sort_order'];
    //一份工作有多个工作形式
    public function job(){
        return $this->belongsTo('App\Models\Job');
    }
}
