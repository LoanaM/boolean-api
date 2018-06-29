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
}
