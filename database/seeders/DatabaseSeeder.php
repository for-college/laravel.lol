<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    //    DB::table('students');

    /**
     * DB::table('students')->insert([
     * ['surname' => 'Окулов',
     * 'name' => 'Семён',
     * 'patronymic' => 'Михйалович',
     * 'date_birth' => '2005-03-07',
     * 'email' => 'test@mail.ru',
     * 'height' => '180',
     * 'weight' => '65',
     * 'sex' => true],
     *
     * ['surname' => 'Стреколовский',
     * 'name' => 'Артём',
     * 'patronymic' => 'Витальевич',
     * 'date_birth' => '2005-04-12',
     * 'email' => 'artem@mail.ru',
     * 'height' => '195',
     * 'weight' => '50',
     * 'sex' => true],
     *
     * ]);
     **/

//    DB::table('students')->insert([
//      'surname' => Str::random(12),
//      'name' => Str::random(12),
//      'patronymic' => Str::random(12),
//      'date_birth' => '2005-03-07',
//      'email' => Str::random(12) . '@mail.ru',
//      'height' => '180',
//      'weight' => '65',
//      'sex' => true
//    ]);

    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
