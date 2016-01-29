<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keitai extends Model
{
    protected $fillable = ['name','sort_order'];
    //һ�ݹ����ж��������ʽ
    public function job(){
        return $this->belongsTo('App\Models\Job');
    }
}
