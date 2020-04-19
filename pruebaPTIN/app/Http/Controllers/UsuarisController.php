<?php

namespace App\Http\Controllers;
use App\Pasajeros;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use View;
use Illuminate\Routing\Route;
class UsuarisController extends Eloquent

{

    public function show($id)
    {
        //$user = Pasajeros::find($id);
        //return view('show',compact('pasajero'));
		//return view('show', ['_id' => Pasajeros::findOrFail($id)]);
		 return view('index');
    }
	
	
	public function create(Request $request)
	{
		
		/*$ARRAY_INSERT = array();
		foreach ($FORMULARIO as $KEY => $VALUE) {
			$ARRAY_INSERT[$VALUE["name"]] = $VALUE["value"];   
		}*/
		
		//$SQL = DB::table('Pasajeros')->insert($ARRAY_INSERT);
		dd($request->all());
		$Pasajero = new Pasajeros();
		$Pasajero->id_user = $request->get('id_user');
		$Pasajero->nombre = $request->get('nombre');
		$Pasajero->apellidos = $request->get('apellidos');
		$Pasajero->nacio = $request->get('nacio');
		$Pasajero->genero = $request->get('genero');
		$Pasajero->vip = $request->get('vip');
		$Pasajero->disabled = $request->get('disabled');
		$Pasajero->telefono = $request->get('telefono');
		$Pasajero->perfil = $request->get('perfil');
		$Pasajero->username = $request->get('username');
		$Pasajero->password = $request->get('password');
		$Pasajero->historico = NULL;
		$Pasajero->save();
		return view('/');
	}
}