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

//Rol General
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

//Rol Medic
//Pacientes
Route::get('paciente/create', ['as' => 'patient.create', 'uses' => 'PatientController@create']);
Route::get('paciente', ['as' => 'patient.index', 'uses' => 'PatientController@index']);
Route::get('paciente/{id}', ['as' => 'patient.show', 'uses' => 'PatientController@show']);
Route::post('paciente', ['as' => 'patient.store', 'uses' => 'PatientController@store']);
Route::get('paciente/{id}/edit', ['as' => 'patient.edit', 'uses' => 'PatientController@edit']);
Route::put('paciente/{id}', ['as' => 'patient.update', 'uses' => 'PatientController@update']);
//Expedientes
Route::get('expedient/{user_id}', ['as' => 'expedient.index', 'uses' => 'ExpedientController@index']);
Route::get('expedient/create/{user_id}', ['as' => 'expedient.create', 'uses' => 'ExpedientController@create']);
Route::post('expedient/', ['as' => 'expedient.store', 'uses' => 'ExpedientController@store']);
//medicinas
Route::get('medicina', ['as' => 'medicine.index', 'uses' => 'MedicineController@index']);
Route::get('medicina/create', ['as' => 'medicine.create', 'uses' => 'MedicineController@create']);
Route::post('medicina', ['as' => 'medicine.store', 'uses' => 'MedicineController@store']);
Route::get('medicina/{id}', ['as' => 'medicine.show', 'uses' => 'MedicineController@show']);
Route::get('medicina/{id}/edit', ['as' => 'medicine.edit', 'uses' => 'MedicineController@edit']);
Route::put('medicina/{id}',['as'=>'medicine.update','uses'=>'MedicineController@update']);

Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'ListController@index']);
