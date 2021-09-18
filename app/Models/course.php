<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    
    public function getStudent(){
        return $this-> hasOne('App\Models\Student');
    }
    // public function getCourse(){
    //     return $this->hasMany('App\Models\Student');
    // }
    // public function getCourse(){
    //     return $this->belongsToMany('App\Models\Student','Courses');
    // }
}
