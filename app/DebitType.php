<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DebitType extends Model
{
    
    public function debit(){
        return $this->hasMany('App\Debit');
    }
}
