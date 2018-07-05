<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $table="vehicles";

    public function course(){
        return $this->hasMany('App\Course','vehicle_id');
    }
}
