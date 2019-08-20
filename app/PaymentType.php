<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    public $table = "payment_types";
    
    public function payment(){
        return $this->hasMany('App\payment');
    }
}
