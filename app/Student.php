<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['course_id','firstname','lastname','age','address','gender'];

  public function course(){
    return $this->belongsTo('App\Course');
  }

}
