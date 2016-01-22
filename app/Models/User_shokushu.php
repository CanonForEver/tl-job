<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_shokushu extends Model
{
    protected $guarded = [];

    public function shokushu()
    {
        return $this->belongsTo('App\Models\Shokushu');
    }
}
