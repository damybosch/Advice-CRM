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
    return view('pages/welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/klanten', 'CustomerController@index')->name('customers');
Route::get('/klanten/action', 'CustomerController@action')->name('customers.action');
Route::get('/klant/{id}', 'CustomerController@show')->name('customer');
Route::get('/gebruikers', 'UserController@index')->name('users');
Route::get('/instellingen', 'SettingController@index')->name('settings');