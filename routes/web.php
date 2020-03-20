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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::middleware('isAdmin', 'auth')->namespace('admin')->group(function (){
    Route::get('/admin/users', 'UsersController@index')->name("admin.users");
    Route::post('/admin/users/store', 'UsersController@store')->name("admin.users.store");
});