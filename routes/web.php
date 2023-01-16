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

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('app.index');

Route::get('/simulacra', 'App\Http\Controllers\SimulacraController@simulacra')->name('app.simulacra');

Route::get('/inventory', 'App\Http\Controllers\SettingsController@inventory')->name('app.inventory');

Route::get('/planner', 'App\Http\Controllers\SettingsController@planner')->name('app.planner');

Route::get('/settings', 'App\Http\Controllers\SettingsController@settings')->name('app.settings');

Route::post('/settings', 'SettingsController@update')->name('settings.update');
