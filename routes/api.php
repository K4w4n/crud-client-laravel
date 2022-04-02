<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/select', 'App\Http\controllers\ClienteController@selectCustomer');

Route::get('/find', 'App\Http\controllers\ClienteController@find');

Route::post('/create', 'App\Http\controllers\ClienteController@createCustomer');

Route::post('/update', 'App\Http\controllers\ClienteController@updateCustomer');

Route::delete('/delete', 'App\Http\controllers\ClienteController@deleteCustomer');

Route::fallback(function ()
{
    return ['status'=>'failed', 'message'=>'Rota não encontrada'];
});