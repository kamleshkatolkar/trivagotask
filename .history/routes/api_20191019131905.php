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
Route::post('/create/ticket','TicketController@store');

//Update entry in the database

Route::post('/edit/ticket/{id}','TicketController@update');


//Create entry into database
Route::post('/create/hotel','HotelController@store');