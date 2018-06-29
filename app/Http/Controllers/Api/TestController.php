<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class TestController extends Controller
{
    public function index()
    {
      $students = Student::all();

      return response()->json([
        'students' => $students]
      );
    }
    
}
