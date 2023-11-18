<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
  public function show()
  {
    //    ->where('name', '=', 'asd')
    $students = DB::table('students')
      ->select('name', 'surname', 'patronymic', 'sex')
      ->get();

    return view('student.show', ['students' => $students]);
  }
}

