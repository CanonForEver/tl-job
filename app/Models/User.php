<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'email','password','name','kana','sex','m_email','m_domain'
    ];

    public function user_shokushus()
    {
        return $this->hasMany('App\Models\User_shokushu');
    }

    public function user_kinmuchis()
    {
        return $this->hasMany('App\Models\User_kinmuchi');
    }

    public function user_keitais()
    {
        return $this->hasMany('App\Models\User_keitai');
    }
}
