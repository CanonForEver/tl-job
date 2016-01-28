<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_keitai extends Model
{
    public $timestamps = false;
<<<<<<< HEAD

    protected $fillable = [
        'user_id','keitai_id'
    ];

    public function keitai()
    {
        return $this->belongsTo('App\Models\Keitai');
    }
=======
    protected $fillable = [
        'user_id', 'keitai_id',
    ];

>>>>>>> master
}
