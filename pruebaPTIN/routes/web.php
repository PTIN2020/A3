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
Route::get('/vuelos', function () {
    return view('vuelos');
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

//registro
Route::post('addPasajero', 'UsuarisController@create');
//login
Route::post('loginPasajero', 'UsuarisController@comprovar');

Route::get('mongo', function() {

	$id= "5e735c51a9ca3e03a7fed7bf";
	$users = DB::connection('mongodb')->table('Pasajeros')->find($id);
	echo var_dump($users);

});

Route::get('mongoTest', function() {
	
	$colecciones = DB::connection('mongodb')->getMongoDB();
	$colecciones = var_dump($colecciones);
	echo $colecciones;
	
});

Route::get('tipo/{type}', 'SweetController@notification');

/*CONSULTA_VUELOS*/
Route::post('consulta_vuelos', 'VuelosController@inicio');

//geolocalizació
Route::get('/geolocalitzacio', function () {
    //Rest Pepín, Óptica, Punt d'informació Nord, Sala VIP Tropical
    $id1 = "5e7373c7a9ca3e03a7fed7cf";
    $id2 = "5e737358a9ca3e03a7fed7ce";
    $id3 = "5eac0e6b463f2f8b37131326";
    $id4 = "5eac0fda463f2f8b37131328";
    $negoci1 = DB::connection('mongodb')->table('Negocios')->find($id1);
    $negoci2 = DB::connection('mongodb')->table('Negocios')->find($id2);
    $negoci3 = DB::connection('mongodb')->table('Negocios')->find($id3);
    $negoci4 = DB::connection('mongodb')->table('Negocios')->find($id4);
    $a0=$negoci1["tipo"];
    $a1=$negoci1["local"];
    $a2=$negoci1["descripción"];
    $a3=$negoci1["estado"];
    $b0=$negoci2["tipo"];
    $b1=$negoci2["local"];
    $b2=$negoci2["descripción"];
    $b3=$negoci2["estado"];
    $c0=$negoci3["tipo"];
    $c1=$negoci3["local"];
    $c2=$negoci3["descripción"];
    $c3=$negoci3["estado"];
    $d0=$negoci4["tipo"];
    $d1=$negoci4["local"];
    $d2=$negoci4["descripción"];
    $d3=$negoci4["estado"];
    $dato = array(
        'tipo' => [ $a0, $b0, $c0, $d0 ],
        'local' => [ $a1, $b1, $c1, $d1 ],
        'descripción' => [ $a2, $b2, $c2, $d2 ],
        'estado' => [ $a3, $b3, $c3, $d3 ]
    );
    return view('geolocalitzacio')->with($dato);
});

//perfil
Route::get('/perfil', function () {
    return view('perfil');
});

//formulari contacte
Route::post('formulario', 'ContacteController@formulario');