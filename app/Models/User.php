<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'email','password','name','kana','sex','birthday_year','birthday_month','birthday_day','ken','jusho','jusho2','tel','tel2','m_email','m_domain','g_name','g_gakubu','g_year','g_type','shokureki','s_other','k_jikyuu','k_gekkyuu','k_nenbou','html_mail','scout','mailservice_new','mailservice_pickup','mailservice_digest','mailservice_dm'
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

    public function procince()
    {
        return $this->belongsTo('App\Models\Province','ken');
    }

    public function user_skill()
    {
        return $this->hasMany('App\Models\User_skill');
    }
}
