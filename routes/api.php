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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('schools', "SchoolsController@index");
Route::post('schools', "SchoolsController@store");
Route::post('schools/delete', "SchoolsController@delete");
Route::post('schools/update', "SchoolsController@update");

Route::get('departments', "DepartmentsController@index");
Route::post('departments', "DepartmentsController@store");
Route::post('departments/delete', "DepartmentsController@delete");
Route::post('departments/update', "DepartmentsController@update");

Route::get('educations', "EducationsController@index");
Route::post('educations', "EducationsController@store");
Route::post('educations/delete', "EducationsController@delete");
Route::post('educations/update', "EducationsController@update");