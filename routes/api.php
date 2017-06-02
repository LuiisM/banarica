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

Route::resource('personas', 'Personas',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('transportadoras', 'Transportadoras',
                ['except' => ['create']]);
Route::resource('ubicaciones', 'Ubicaciones',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
