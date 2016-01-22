<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_kinmuchi extends Model
{
    protected $guarded = [];

    public function kinmuchi()
    {
        return $this->belongsTo('App\Models\Kinmuchi');
    }
}
