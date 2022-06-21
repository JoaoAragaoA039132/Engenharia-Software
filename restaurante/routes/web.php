<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace'=>'App\Http\Controllers'],function()
{

//todos
Route::get('/', 'HomeController@index')->name('home.index');

//sem auth
Route::get('/register', 'RegisterController@create')->name('register.create');
Route::post('/register', 'RegisterController@store')->name('register.store');
Route::get('/login', 'LoginController@show')->name('login.show');
Route::post('/login', 'LoginController@perform')->name('login.perform');

//cliente
Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
Route::delete('/delete', 'DeleteController@destroy')->name('delete.destroy');
Route::get('/menu-client', 'MenuController@show')->name('menu.show');
Route::get('/info', 'InfoController@show')->name('info.show');
Route::get('/reservations-client/create', 'ReservationsController@createc')->name('reservations.create');
Route::post('/reservations-client', 'ReservationsController@storec')->name('reservations.store');
Route::delete('/reservations-client', 'ReservationsController@destroyc')->name('reservations.destroy');
Route::get('/reservations-client', 'ReservationsController@showc')->name('reservations-client');
Route::view('/aboutus-client', 'aboutus-client.show');
Route::get('/messages-client', 'MessagesController@createc')->name('messages.createc');
Route::post('/messages-client', 'MessagesController@storec')->name('messages.storec');

Route::view('/puser-client', 'puser-client.show');


//funcionarios
Route::get('/reservations-func/{reservations}/edit', 'ReservationsController@editf')->name('reservations-func.edit');
Route::patch('/reservations-func/{reservations}', 'ReservationsController@updatef')->name('reservations-func.update');
Route::get('/reservations-func', 'ReservationsController@showf')->name('reservations.show');
Route::get('/categories', 'CategoriesControler@create')->name('categories.create');
Route::post('/categories', 'CategoriesControler@store')->name('categories.store');
Route::get('/categories', 'CategoriesControler@edit')->name('categories.edit');
Route::put('/categories', 'CategoriesControler@update')->name('categories.update');
Route::get('/dish', 'MenusController@showf')->name('dish.show');
Route::get('/dish/create', 'MenusController@createf')->name('dish.create');
Route::post('/dish', 'MenusController@storef')->name('dish.store');
Route::get('/dish/{Menus}/edit', 'MenusController@editf')->name('dish.edit');
Route::put('/dish/{Menus}/update','MenusController@updatef')->name('dish.update');
Route::get('/messages-func', 'MessagesController@showf')->name('messages.showf');
Route::get('/images', 'ImagesControler@create')->name('images.create');
Route::post('/images', 'ImagesControler@store')->name('images.store');
Route::delete('/images', 'ImagesController@destroy')->name('images.destroy');

Route::view('/puser-func', 'puser-func.show');


//Route::get('/logout', 'LogoutController@logout')->name('logout.logout');
});
