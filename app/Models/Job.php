<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['shokushu', 'kinmuchi', 'keitai','category','ky_kind','ky_from','mikeiken'];

    //һ�ݹ�������һ��ְҵ
    public function this_shokushu(){
        return $this->belongsTo('App\Models\Shokushu','shokushu');
    }
    //һ�ݹ�������һ�������ص�
    public function this_kinmuchi(){
        return $this->belongsTo('App\Models\Kinmuchi','kinmuchi');
    }
    //һ�ݹ������ж��������ʽ
    public function this_keitai1(){
        return $this->belongsTo('App\Models\Keitai','keitai1');
    }
    public function this_keitai2(){
        return $this->belongsTo('App\Models\Keitai','keitai2');
    }
    public function this_keitai3(){
        return $this->belongsTo('App\Models\Keitai','keitai3');
    }
    //һ�ݹ�������һ����ҵ
    public function this_category(){
        return $this->belongsTo('App\Models\Category','category');
    }
    public function job_focus_words(){
        return  $this->hasMany('App\Models\Job_focus_word');
    }
    public function com(){
        return  $this->belongsTo('App\Models\Com');
    }

}
