<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table='bookings';   

    public function course(){
        return $this->belongsTo('App\Course');
    }
    public function enquiry(){
        return $this->belongsTo('App\Enquiry');
    }
    public function trainer(){
        return $this->belongsTo('App\Trainer');
    }
    public function shift(){
        return $this->belongsTo('App\Shift');
    }
}
