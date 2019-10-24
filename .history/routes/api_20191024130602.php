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


//Create entry into database
Route::post('/hotels/list/{noOfRecords}/{start?}','HotelController@list');
Route::post('/hotels/get/{id}/','HotelController@show');
Route::post('/hotels/update/','HotelController@update');
Route::post('/hotels/delete/','HotelController@delete');
Route::post('/hotels/create/','HotelController@store');

Route::post('/hoteliers/list/{auth_token}/{noOfRecords}/{start?}','HoteliersController@list');
