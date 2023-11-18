<?php

namespace App\Http\Controllers;

class TestingController extends Controller
{
  public function index()
  {
    return view(
      'testing.index',
      ['name' => 'Семён',
        'fontSize' => 32,
        'arr' => [
          'Василий', 'Дмитрий', 'Никита', 'Кирилл', 'Денис', 'Алик'
        ],
        'isAuth' => false,
        'students' => [
          [
            'surname' => 'Евсеев',
            'name' => 'Дмитрий'
          ],
          [
            'surname' => 'Ладяев',
            'name' => 'Никита'
          ],
          [
            'surname' => 'Шейкина',
            'name' => 'Елизавета'
          ],
        ],
        'users' => [
          [
            'name' => 'us1',
            'surname' => 'sur1',
            'banned' => true
          ],
          [
            'name' => 'us2',
            'surname' => 'sur2',
            'banned' => false
          ],
          [
            'name' => 'us4',
            'surname' => 'sur3',
            'banned' => true
          ],
          [
            'name' => 'us4',
            'surname' => 'sur4',
            'banned' => false
          ],
          [
            'name' => 'us5',
            'surname' => 'sur5',
            'banned' => false
          ],
        ],
        'empty' => [],
        'numbers' => range(1, date('t'))
      ]);
  }
}
