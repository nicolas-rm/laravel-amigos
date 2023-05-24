<?php

use Illuminate\Support\Facades\Route;
/* Agreando Acceso al controlador */
use App\Http\Controllers\AmigoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Agregar rutas nuevas */
/* Mostrar rutas activas */

/* Accesso directo a la lista */
// Route::get('/amigo', function () { return view('amigo.index'); });

/* Acceso referenciado al metodo correspondiente: Create */
// Route::get('/amigo/create', [AmigoController::class, 'create']);

/* Acceso automatico a todas las url: php artisan route:list  */
Route::resource('amigos', AmigoController::class);

/* Resultado */
/*
  GET|HEAD        amigo ............................................ amigo.index › AmigoController@index
  POST            amigo ............................................ amigo.store › AmigoController@store
  GET|HEAD        amigo/create ................................... amigo.create › AmigoController@create
  GET|HEAD        amigo/{amigo} ...................................... amigo.show › AmigoController@show
  PUT|PATCH       amigo/{amigo} .................................. amigo.update › AmigoController@update
  DELETE          amigo/{amigo} ................................ amigo.destroy › AmigoController@destroy
  GET|HEAD        amigo/{amigo}/edit ................................. amigo.edit › AmigoController@edit
  GET|HEAD        api/user .............................................................................
  GET|HEAD        sanctum/csrf-cookie sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
*/

// Auth::routes();
