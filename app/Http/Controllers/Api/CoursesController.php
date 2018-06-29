<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CoursesController extends Controller
{
  public function index()
  {
    $courses = Course::all();

    return response()->json([
      'courses' => $courses
    ]);
  }

  public function show(Request $request, $id)
  {

    $data = $request->all();
    $arrayWith = [];

    if (isset($data['insegnante']) && $data['insegnante']) {
      $arrayWith[] = 'teacher';  //nomi delle relazioni many or one nel model course
    }
    if (isset($data['studenti']) && $data['studenti']){
      $arrayWith[] = 'students';
    }

    $course = Course::with($arrayWith)->first();

    return response()->json([
      'course' => $course
    ]);

  }
}
