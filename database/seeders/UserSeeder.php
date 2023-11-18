<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    DB::table('users')->insert([

      ['surname' => Str::random(12),
        'name' => Str::random(12),
        'password' => Str::random(60),
        'login' => Str::random(55),],

      ['surname' => Str::random(12),
        'name' => Str::random(12),
        'password' => Str::random(60),
        'login' => Str::random(55),],

      ['surname' => Str::random(12),
        'name' => Str::random(12),
        'password' => Str::random(60),
        'login' => Str::random(55),],

      ['surname' => Str::random(12),
        'name' => Str::random(12),
        'password' => Str::random(60),
        'login' => Str::random(55),],

      ['surname' => Str::random(12),
        'name' => Str::random(12),
        'password' => Str::random(60),
        'login' => Str::random(55),],
    ]);
  }
}
