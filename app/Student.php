<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses() {
        return $this->belongsTo('App\Student');
    }

    public function payments() {
        return $this->hasMany('App\Payment');
    }
}
