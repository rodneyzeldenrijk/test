<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/inwoners', 'ApiController@Inwoners')->name('api.inwoners');
Route::get('/inwoners/{city}', 'ApiController@InwonersCity')->name('api.inwoners.stad');

Route::get('/inwoners/{id}/add', 'ApiController@addRit')->name('api.add.rit');

Route::get('/taxis', 'ApiController@Taxis')->name('api.taxis');

Route::get('/taxis/{id}', 'ApiController@TaxisSingle')->name('api.taxis.single');

Route::get('/taxis/{id}/ritten', 'ApiController@TaxisRitten')->name('api.taxis.ritten');



