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

  public function show(Course $id)
  {
    return response()->json([
      'corso' => $id
    ]);
  }
}
