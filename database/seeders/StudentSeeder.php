<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
  public function run(): void
  {
    DB::table('students')->insert([
      'surname' => Str::random(12),
      'name' => Str::random(12),
      'patronymic' => Str::random(12),
      'date_birth' => '2005-03-07',
      'email' => Str::random(12) . '@mail.ru',
      'height' => '180',
      'weight' => '65',
      'sex' => true
    ]);
  }
}
