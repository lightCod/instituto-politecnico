<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses() {
        return $this->belongsTo('App\Course', 'courses_id');
    }

    public function debits() {
        return $this->hasMany('App\Debit');
    }

    public function credits() {
        return $this->hasMany('App\Credit');
    }

    public function checking_accounts() {
        return $this->hasMany('App\CheckingAccount');
    }

}
