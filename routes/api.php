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
Route::post('login', 'AuthController@login');
Route::resource('users', 'User',
                ['except' => ['create']]);
Route::group(['middleware' => 'jwt.auth'],function(){
 Route::resource('personas', 'Personas',
                ['except' => ['create']]);
Route::resource('sedes', 'Sedes',
                ['except' => ['create']]);
Route::resource('transportadoras', 'Transportadoras',
                ['except' => ['create']]);
Route::resource('ubicaciones', 'Ubicaciones',
                ['except' => ['create']]);
Route::resource('motonaves', 'Motonaves',
                ['except' => ['create']]);
Route::resource('proclientes', 'Proclientes',
                ['except' => ['create']]);
Route::resource('recepciones', 'Recepciones',
                ['except' => ['create']]);
Route::resource('rechazos', 'Rechazos',
                ['except' => ['create']]);
Route::resource('sucursales', 'Sucursales',
                ['except' => ['create']]);
Route::resource('unidadesproducciones', 'UnidadesProducciones',
                ['except' => ['create']]);
Route::resource('programaciones', 'Programaciones',
                ['except' => ['create']]);
Route::resource('departamentos', 'Departamentos',
                ['except' => ['create']]);
Route::resource('ciudades', 'Ciudades',
                ['except' => ['create']]);
Route::resource('contactos', 'Contactos',
                ['except' => ['create']]);
Route::resource('productos', 'Productos',
                ['except' => ['create']]);
Route::resource('recepcionesdetalles', 'RecepcionesDetalles',
                ['except' => ['create']]);
Route::resource('clientes', 'Clientes',
                ['except' => ['create']]);
Route::resource('users', 'Users',
                ['except' => ['create']]);
});

