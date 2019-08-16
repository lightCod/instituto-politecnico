<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function students() {
        return $this->belongsTo('App\Student');
    }

    public function paymentsType(){
        return $this->belongsTo('App\PaymentType');
    }
}
