<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fine;

class DebitType extends Model
{
    
    public function debits(){
        return $this->hasMany('App\Debit');
    }

}
