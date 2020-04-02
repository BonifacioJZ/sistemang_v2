<?php

use Illuminate\Support\Facades\Route;
use App\Role;
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





Route::get('/', ['as' => 'home', 'uses' => 'ListController@index']);
Route::get('/login', function () {
    return view('login.login');
})->name('login');


Route::get('cita/{id}', ['as' => 'cita.show', 'uses' => 'CitaController@show']);
Route::get('cita', ['as' => 'cita.index', 'uses' => 'CitaController@index']);
Route::get('Cita/create', ['as' => 'cita.create', 'uses' => 'CitaController@create']);
Route::post('cita', ['as' => 'cita.store', 'uses' => 'CitaController@store']);
Route::get('cita/{id}/edit', ['as' => 'cita.edit', 'uses' => 'CitaController@edit']);
Route::put('cita/{id}', ['as' => 'cita.update', 'uses' => 'CitaController@update']);
Route::get('cita/confirm/{id}', ['as' => 'cita.confirm', 'uses' => 'CitaController@confirm']);
Route::delete('cita/{id}', ['as' => 'cita.destroy', 'uses' => 'CitaController@destroy']);
Route::Post('list', ['as' => 'list.store', 'uses' => 'ListController@store']);
Route::delete('list/{id}', ['as' => 'list.destrpyer', 'uses' => 'ListController@destroy']);

Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'ListController@index']);
