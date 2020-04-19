<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('historia');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/vip', function () {
    return view('vip');
});

Route::get('/pmr', function () {
    return view('pmr');
});

Route::get('/geolocalitzacio', function () {
    return view('geolocalitzacio');
});

Route::get('/contacte', function () {
    return view('contacte');
});

Route::get('/show/{id}', 'UsuarisController@show')->name('pruebaUsuari');

Route::post('addPasajero', 'UsuarisController@create')->name('register');

Route::get('mongo', function() {

	$id= "5e735c51a9ca3e03a7fed7bf";
	$users = DB::connection('mongodb')->table('Pasajeros')->find($id);
	echo var_dump($users);

});

Route::get('mongoTest', function() {
	/*$collection = DB::connection('mongodb')->getCollection('Pasajeros');
	$c = var_dump($collection);
	echo $c;*/
	
	$colecciones = DB::connection('mongodb')->getMongoDB();
	$colecciones = var_dump($colecciones);
	echo $colecciones;
	/*foreach ($colecciones as $coleccion) {
		echo "cantidad de documentos en $coleccion: ";
		echo $coleccion->count(), "\n";
	}*/
	
	
});