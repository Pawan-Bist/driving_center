<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table="courses";

    public function durationType(){
        return $this->belongsTo('App\DurationType','duration_type_id');
    }
    public function vehicle(){
        return $this->belongsTo('App\Vehicle','vehicle_id');
    }
    public function enquiry(){
        return $this->hasMany('App\Enquiry','course_id');
    }
}
