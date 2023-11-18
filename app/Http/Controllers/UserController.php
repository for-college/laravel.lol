<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function show($id)
  {
    $students = DB::table('users')
      ->where('id', '=', $id)
      ->get();

    return view('user.showSingle', ['students' => $students]);
  }

  public function showAll()
  {
    $students = DB::table('users')
      ->get();

    return view('user.show', ['students' => $students]);
  }
}
