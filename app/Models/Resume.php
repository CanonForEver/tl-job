<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function shokushu()
    {
        return $this->belongsTo('App\Models\Shokushu','r_shokushu');
    }

    public function keitai()
    {
        return $this->belongsTo('App\Models\Keitai','r_keitai');
    }
}
