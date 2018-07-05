<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table='bookings';   


    public function enquiry(){
        return $this->belongsTo('App\Enquiry','enquiry_id');
    }
    public function trainer(){
        return $this->belongsTo('App\Trainer','trainer_id');
    }
    public function shift(){
        return $this->belongsTo('App\Shift','shift_id');
    }
}
