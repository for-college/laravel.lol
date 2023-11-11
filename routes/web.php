<?php

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

Route::get('/user/{age}', function ($age) {
  return "Возраст пользователя " . $age;
});
