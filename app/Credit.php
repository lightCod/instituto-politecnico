<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    public function debits(){
        return $this->belongsTo('App\Debit');
    }

    public function students(){
        return $this->belongsTo('App\Student');
    }
}
