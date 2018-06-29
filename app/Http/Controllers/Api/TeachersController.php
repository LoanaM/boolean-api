<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;

class TeachersController extends Controller
{
  public function index()
  {
    $teachers = Teacher::all();

    return response()->json([
      'teachers' => $teachers
    ]);
  }

  public function show($id)
  {
    $teacher = Teacher::with('courses')->find($id); //where('id',$id)->first();

    return response()->json([
      'teacher'=>$teacher
    ]);
  }
}
