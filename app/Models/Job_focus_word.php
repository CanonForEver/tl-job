<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_focus_word extends Model
{
    public function focus_word(){
        return $this->belongsTo('App\Models\Focus_word','job_focus_word');

    }

}
