<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'email',
        'password',
        'k_jikyuu',
        'k_gekkyuu',
        'k_nenbou',
        'html_mail',

        'name',
        'kana',
        'sex',
        'birthday_year',
        'birthday_month',
        'birthday_day',
        'ken',
        'jusho',
        'jusho2',
        'tel',
        'tel2',
        'email',
        'm_email',
        'm_domain',
        'g_name',
        'g_gakubu',
        'g_year',
        'g_type',
        'shokureki'
    ];


    //工作经历
    public function resumes()
    {
        return $this->hasMany('App\Models\Resume');
    }
}
