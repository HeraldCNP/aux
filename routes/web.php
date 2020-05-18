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

Route::get('/', function () {
    return view('welcome');
})->name('inicio');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/practicas', 'RoutesController@practicas')->name('practicas');
Route::get('/video', 'RoutesController@videos')->name('video');






Route::group(['
        prefix' => 'Admin',
        'namespace' => 'Admin', 'middleware' => 'auth'],
//    'middleware' => 'auth']
    function (){


    Route::resource('usuarios', 'UserController');
    Route::resource('videos', 'VideoController');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
});
