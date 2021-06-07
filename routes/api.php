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


//get todas las categorias 
Route::get('categoria','App\Http\Controllers\categoriaController@getCategoria');
//get categoria por id
Route::get('categoria/{id}','App\Http\Controllers\categoriaController@getCategoriaxid');

//post categoria
Route::post('addCategoria','App\Http\Controllers\categoriaController@insertCategoria');

//put categoria(actualizar)  , opc post
Route::put('updateCategoria/{id}','App\Http\Controllers\categoriaController@updateCategoria');

//delete categoria
Route::delete('deleteCategoria/{id}','App\Http\Controllers\categoriaController@deleteCategoria');