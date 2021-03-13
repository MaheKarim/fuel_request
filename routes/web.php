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
    // Fuel Type Route
    Route::get('/fuel-type', 'FuelTypeController@index')->name('fueltype');
    Route::get('/fuel-type/create', 'FuelTypeController@create')->name('fueltype.create');
    Route::post('/fuel-type-store', 'FuelTypeController@store')->name('fueltype.store');
    Route::get('/fuel-type/edit/{id}', 'FuelTypeController@edit')->name('fueltype.edit');
    Route::post('/fuel-type/update/{id}', 'FuelTypeController@update')->name('fuelTypeUpdate');
    Route::delete('/fuel-type/delete/{id}', 'FuelTypeController@destroy')->name('fueltype.destroy');
    // Refuelling For
    Route::get( '/refuelling-for', 'RefuelingForController@index')->name('refuelling');
    Route::get('/refuelling-for/create','RefuelingForController@create')->name('refuelling.create');
    Route::post('/refuelling-for/store', 'RefuelingForController@store')->name('refuelling.store');
    Route::get( '/refuelling-for/edit/{id}', 'RefuelingForController@edit')->name('refuelling.edit');
    Route::post('/refuelling-for/update/{id}', 'RefuelingForController@update')->name('refuelling.update');
    Route::delete('/refuelling-for/delete/{id}', 'RefuelingForController@destroy')->name('refuelling.destroy');
});
