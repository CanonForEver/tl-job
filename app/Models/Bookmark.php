<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable =['user_id','job_id'];
    public function jobs(){
        return $this->belongsTo('App\Models\Job');
    }
    public $timestamps = false;
}
