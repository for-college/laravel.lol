<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
  public function hello()
  {
    return "Привет, лучшая группа!";
  }

  public function hello2($name)
  {
    return "Привет, $name!";
  }

  public function hello3($id)
  {
    $hi = [
      1 => "Добрый день!",
      2 => "Добрый вечер!",
      3 => "Доброй ночи!",
      4 => "Доброе утро!",
    ];

    return $hi[$id];
  }

  public function hello4($name)
  {
    $cities = [
      'Дмитрий' => "Томск",
      'Алексей' => "Омск",
      'Елизавета' => "Санкт-Петербург",
    ];

    if (!isset($cities[$name])) {
      return 'Город не найден';
    }

    return 'Город юзера: ' . $cities[$name];
  }

  public function hello6()
  {
    return view('post.hello');
  }

  public function hello7($name)
  {
    return view('post.hello7', ['name' => $name, 'title' => 'Заголовок']);
  }
}
