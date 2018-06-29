<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['firstname','lastname','age','address','gender'];

    public function courses(){
      return $this->hasMany('App\Course');
    }
}
