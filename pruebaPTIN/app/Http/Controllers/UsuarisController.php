<?php

namespace App\Http\Controllers;
use App\Pasajeros;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use View;
use DB;
use Illuminate\Routing\Route;
use Response;
use App\Exceptions\Handler;
class UsuarisController extends Eloquent

{

    public function show($id)
    {
        //$user = Pasajeros::find($id);
        //return view('show',compact('pasajero'));
		//return view('show', ['_id' => Pasajeros::findOrFail($id)]);
		 return view('index');
    }
	
	public function comprovar(Request $request)
    {
        $FORMULARIO = json_decode(base64_decode($request->input("formulari_login")), true);
		//dd($FORMULARIO);
        $ARRAY_INSERT = array();
        foreach ($FORMULARIO as $KEY => $VALUE) {
            $ARRAY_INSERT[$VALUE["name"]] = $VALUE["value"];
        }
        $usuari = $ARRAY_INSERT["correu"];
        $passwd = $ARRAY_INSERT["contrasenya"];
        //$pasajero = DB::connection('mongodb')->table('Pasajeros')->find($usuari);
		$pasajero = DB::connection('mongodb')->table('Pasajeros')->where('username', $usuari)->first();
		//dd($pasajero);
        if ( ! is_null($pasajero)){
			if($usuari == $pasajero["username"] && $passwd==$pasajero["password"]){
				//echo "Correcte";
				echo json_encode(array("estado" => "ok"));
			}elseif($usuari == $pasajero["username"]){
				//echo "Contrasenya incorrecte";
				echo json_encode(array("estado" => "casi"));
			}
		}else{
		  echo json_encode(array("estado" => "ko"));
		  //echo "El passatger amb correu: " . $usuari .  " no existeix";
		}
    }
	
	
	public function create(Request $request)
	{
		$FORMULARIO = json_decode(base64_decode($request->input("formulario")), true);
		//dd($FORMULARIO);
		//echo $FORMULARIO[0]["value"];
		$ARRAY_INSERT = array();
		
		foreach ($FORMULARIO as $KEY => $VALUE) {
			$ARRAY_INSERT[$VALUE["name"]] = $VALUE["value"];
		}
		
		$Pasajero = new Pasajeros();
		$Pasajero->id_user = $ARRAY_INSERT["id_user"];
		$Pasajero->nombre = $ARRAY_INSERT["nombre"];
		$Pasajero->apellidos = $ARRAY_INSERT["apellidos"];
		$Pasajero->nacio = NULL;
		$Pasajero->genero = $ARRAY_INSERT["genere"];
		$Pasajero->vip = NULL;
		$Pasajero->disabled = NULL;
		$Pasajero->telefono = $ARRAY_INSERT["telefono"];
		$Pasajero->perfil = NULL;
		$Pasajero->username = $ARRAY_INSERT["username"];
		$Pasajero->password = $ARRAY_INSERT["password"];
		$Pasajero->historico = NULL;
		//$resultado = $Pasajero->save();
		//echo $resultado;
		$existeix = DB::connection('mongodb')->table('Pasajeros')->where('username', $Pasajero->username)->first();
		if ($existeix == null) {
			$Pasajero->save();
			echo json_encode(array("estado" => "ok"));
		}else{
			echo json_encode(array("estado" => "ko"));
		}	
	}
}