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
Route::get('/menu', 'MenuController@show')->name('menu.show');
Route::get('/info', 'InfoController@show')->name('info.show');
Route::get('/reservations-client', 'ReservationsController@createc')->name('reservations.create');
Route::post('/reservations-client', 'ReservationsController@storec')->name('reservations.store');
Route::delete('/reservations-client', 'ReservationsController@destroyc')->name('reservations.destroy');
Route::get('/reservations-client', 'ReservationsController@showc')->name('reservations.show');
Route::get('/contacts', 'ContactsController@show')->name('contacts.show');
Route::get('/messages', 'MessagesControler@create')->name('messages.create');
Route::post('/messages', 'MessagesControler@store')->name('messages.store');


//funcionarios
Route::get('/reservations-func', 'ReservationsController@editf')->name('reservations.edit');
Route::put('/reservations-func', 'ReservationsController@updatef')->name('reservations.update');
Route::delete('/reservations-func', 'ReservationsController@destroyf')->name('reservations.destroy');
Route::get('/reservations-func', 'ReservationsController@showf')->name('reservations.show');
Route::get('/categories', 'CategoriesControler@create')->name('categories.create');
Route::post('/categories', 'CategoriesControler@store')->name('categories.store');
Route::get('/categories', 'CategoriesControler@edit')->name('categories.edit');
Route::put('/categories', 'CategoriesControler@update')->name('categories.update');
Route::get('/dish', 'DishControler@create')->name('dish.create');
Route::post('/dish', 'DishControler@store')->name('dish.store');
Route::get('/dish', 'DishControler@edit')->name('dish.edit');
Route::put('/dish', 'DishControler@update')->name('dish.update');
Route::get('/messages', 'MessagesControler@edit')->name('messages.edit');
Route::put('/messages', 'MessagesControler@update')->name('messages.update');
Route::get('/images', 'ImagesControler@create')->name('images.create');
Route::post('/images', 'ImagesControler@store')->name('images.store');
Route::delete('/images', 'ImagesController@destroy')->name('images.destroy');

//Route::get('/logout', 'LogoutController@logout')->name('logout.logout');
});
