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

Route::get('/select', 'App\Http\controllers\ClienteController@SelectCustomer');

Route::post('/create', 'App\Http\controllers\ClienteController@CreateCustomer');

Route::put('/update', 'App\Http\controllers\ClienteController@UpdateCustomer');

Route::delete('/delete', 'App\Http\controllers\ClienteController@DeleteCustomer');

Route::fallback(function ()
{
    return ['status'=>'failed', 'message'=>'Rota não encontrada'];
});