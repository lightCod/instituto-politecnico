<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckingAccount extends Model
{
    public function students() {
        return $this->belongsTo('App\Student', 'students_id');
    }
}
