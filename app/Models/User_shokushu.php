<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_shokushu extends Model
{
<<<<<<< HEAD
    public $timestamps = false;

    protected $fillable = [
        'user_id','shokushu_id'
    ];

    public function shokushu()
    {
        return $this->belongsTo('App\Models\Shokushu');
    }
=======
    //
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'shokushu_id',
    ];
>>>>>>> master
}
