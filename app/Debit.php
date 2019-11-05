<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    public function students() {
        return $this->belongsTo('App\Student', 'students_id');
    }

    public function debitsType(){
        return $this->belongsTo('App\DebitType', 'debit_types_id');
    }

}
