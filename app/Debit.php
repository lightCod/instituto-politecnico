<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    public function students() {
        return $this->belongsTo('App\Student');
    }

    public function debitsType(){
        return $this->belongsTo('App\DebitType');
    }

    public function credits(){
        return $this->hasMany('App\Credit');
    }
}
