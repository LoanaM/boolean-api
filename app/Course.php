<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $fillable = ['teacher_id','coursename','start_date','end_date'];

   public function teacher(){
     return $this->belongsTo('App\Teacher');     
   }
}
