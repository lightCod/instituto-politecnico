<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses() {
        return $this->belongsTo('App\Course');
    }

    public function debits() {
        return $this->hasMany('App\Debit');
    }

    public function credits() {
        return $this->hasMany('App\Credit')
    }
}
