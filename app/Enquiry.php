<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    public $table="enquiries";
    
    public function course(){
       return $this->belongsto('App\Course');
    }
    public function fullName(){
        return $this->first_name.' '.$this->last_name;
    }
}
