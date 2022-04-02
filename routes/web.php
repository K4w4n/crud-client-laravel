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

Route::get('/', 'App\Http\controllers\FormController@SelectCustomer')->name('SelectCustomer');

Route::get('/create', 'App\Http\controllers\FormController@CreateCustomer')->name('CreateCustomer');

Route::get('/update', 'App\Http\controllers\FormController@UpdateCustomer')->name('UpdateCustomer');

Route::get('/delete', 'App\Http\controllers\FormController@DeleteCustomer')->name('DeleteCustomer');

Route::fallback(function ()
{
    return view('404');
});