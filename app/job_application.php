<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_application extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }
}
