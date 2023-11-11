<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

/** Создание маршрута /test с выводом сообщения Тестовая страница **/

Route::get('/test', function () {
  return "Тестовая страница";
});

Route::get('/test/2', function () {
  return 'Какое-то сообщение';
});

/** Параметры маршрута **/

Route::get('/post/{id}', function ($id) {
  return "Пост $id";
});

Route::get('/user/{name}', function ($name) {
  return "Имя $name";
});

/** Несколько параметров в маршруте **/

Route::get('/post/{cardId}/{postId}', function ($cardId, $postId) {
  return "$cardId - $postId";
});

Route::get('/user/{surname}/{name}', function ($surname, $name) {
  return "Привет, $surname $name";
});

/** Необязательные параметры **/

Route::get('/posts/{page?}', function ($page = 1) {
  return "Номер страницы " . $page;
});

Route::get('/city/{city?}', function ($city = 'Томск') {
  return "Город " . $city;
});

/** Ограничение параметров **/

Route::get('/users/{age}', function ($age) {
  return "Возраст пользователя: " . $age;
})->where('age', '[0-9]+');

Route::get('/govsign/{sign}/{id}', function ($sign, $id) {
  return "Номер: " . $sign . ". Регион: " . $id;
})->where('sign', '[a-z]+');

/**
 * ===========================================
 * whereAlpha - только буквы
 * whereNumber - только цифры
 * whereAlphaNumeric - только буквы и цифры
 * ===========================================
 **/

Route::get('/govsign2/{sign}/{id}', function ($sign, $id) {
  return "Номер: " . $sign . ". Регион: " . $id;
})->whereAlpha('sign');

/**
 * Разрешение конфликтов в маршрутах
 * Сначала указываем частный случай, а потом - общие
 **/

Route::prefix('/test2')->group(function () {
  Route::get('/all', function () {
    return "Все тесты";
  });

  Route::get('/{n}', function ($n) {
    return "Тест - " . $n;
  });
});

/**
 * Маршрут, использующий контроллер
 * Route::get('/route', ["full controller's name", "action's name"])
 */

/** Если мы заюзали имя контроллера, то можно писать так  **/
Route::get('/hi', [PostController::class, 'hello']);

Route::get('/hello', ['App\Http\Controllers\PostController', 'hello']);

/** Передача параметра в метод **/
Route::get('/hi/{name}', [PostController::class, 'hello2']);

/** Применение машрутов маршрутов **/
Route::get('hello/{id}', [PostController::class, 'hello3'])->where('id', '[1-4]');

Route::get('hello4/{name}', [PostController::class, 'hello4']);

/** Представления **/
Route::get('hello6', [PostController::class, 'hello6']);

Route::get('hello7/{name}', [PostController::class, 'hello7']);
