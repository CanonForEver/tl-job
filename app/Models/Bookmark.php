<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'job_id',
    ];

}
