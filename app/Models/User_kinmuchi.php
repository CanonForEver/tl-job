<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User_kinmuchi extends Model
{
<<<<<<< HEAD
    public $timestamps = false;

    protected $fillable = [
        'user_id','kinmuchi_id'
    ];
    public function kinmuchi()
    {
        return $this->belongsTo('App\Models\Kinmuchi');
    }
=======
    //
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'kinmuchi_id',
    ];
>>>>>>> master
}
