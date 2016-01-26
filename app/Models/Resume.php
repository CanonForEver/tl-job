<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id','office','syear','smonth','eyear','emonth','r_shokushu','r_keitai','job_content'
    ];

    public function shokushu()
    {
        return $this->belongsTo('App\Models\Shokushu','r_shokushu');
    }

    public function keitai()
    {
        return $this->belongsTo('App\Models\Keitai','r_keitai');
    }
}
