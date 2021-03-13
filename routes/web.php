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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/user/dashboard', 'UserController@index')->name('user.home');
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.home');


// Admin Route Will Be Here
Route::name('admin.')->prefix('admin')->middleware(['auth', 'role:superadministrator'])->group(function () {

    Route::get('/fuel-type', 'FuelTypeController@index')->name('fueltype');
    Route::get('/fuel-type/create', 'FuelTypeController@create')->name('fueltype.create');
    Route::post('/fuel-type-store', 'FuelTypeController@store')->name('fueltype.store');
    Route::get('/fuel-type/edit/{id}', 'FuelTypeController@edit')->name('fueltype.edit');

    Route::post('/fuelType-update/{id}', 'FuelTypeController@update')->name('fuelTypeUpdate');

    Route::delete('/fuel-type/{id}', 'FuelTypeController@destroy')->name('fueltype.destroy');
});
