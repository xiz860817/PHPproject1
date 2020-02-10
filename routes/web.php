<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('hello');
});

Route::resource('customer', 'CustomerController');

Route::get('users/{name?}', function ($name = 'Peter'){
    return 'Hello ,'.$name;
  });

  //增加下列一行
Route::resource('cars','CarsController');

<<<<<<< HEAD
Route::middleware(['member'])->group(function () {
    Route::get('member_center', function () {
      // 經過member middleware驗證後才能進入
    });
  });
=======
Route::get('edit/{Cusid}','CustomerController@edit');
Route::post('edit/{Cusid}', 'CustomerController@update');
>>>>>>> ef0eacbd63f808aacfdb8fe9a95bcd18f587d268
