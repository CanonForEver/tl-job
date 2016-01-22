<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_keitai extends Model
{
    protected $guarded = [];

    public function keitai()
    {
        return $this->belongsTo('App\Models\Keitai');
    }
}
