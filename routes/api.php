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

Route::prefix('v1')->group(function(){
    Route::get('everything','NigController@getAll');
    Route::get('states','NigController@getStates');
    Route::get('states/lgas','NigController@getStatesWithLGAs');
    Route::get('state/lgas/{state}','NigController@getLGAs');
    Route::get('lga/wards/{lga}','NigController@getWards');
    Route::get('ward/units/{ward}','NigController@getUnits');
});