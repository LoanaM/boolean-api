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

    public function show($id)
    {
        $student = Student::with('course')->find($id); //sing per la relazione

        return response()->json([
          'student' => $student
        ]);
    }

    public function save(Request $request)
    {
      //request->validate()

      $data = $request->all();

      $newStudent = new Student;
      $newStudent->fill($data);
      $newStudent->save();
      if(!empty($newStudent->id)){
        return response()->json([
          'success'=>true
        ]);
      }
      else {
        return response()->json([
          'success'=>false
        ]);
      }
    }

    public function update(Request $request)
    {
      $student = Student::find($id);
      if(empty($student)) return response()->json(['error'=>true]);
      $student->update($request->all());
      return response()->json(['success'=>true]);
    }

}
