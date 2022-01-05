<?php

//aprendible.com = Route::get('/',function)
//aprendible.com/contacto = Route::get('contacto',function)

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* //añadiendo ? hacemos que no sea obligatorio tener que pasarle un nombre en la url
//Por defecto el valor de $nombre sera "Invitado"

Route::get('saludo/{nombre?}',function($nombre = "Invitado"){
    return "saludos" . $nombre;
});
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
    $nombre = "Mattius";
    return view('home',compact('nombre')); //compact: ['nombre' => $nombre]
})->name('home');

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/portfolio','porfolio')->name('porfolio');




