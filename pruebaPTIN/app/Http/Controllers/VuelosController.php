<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use View;
use DB;
use Illuminate\Routing\Route;
use Response;
use App\Exceptions\Handler;
use Illuminate\Support\Facades\Redirect;
class VuelosController extends Eloquent

{
	public function inicio(Request $request) {
		    $FORMULARIO = json_decode(base64_decode($request->input("formulario_vuelos")), true);
			//dd($FORMULARIO);
			$ARRAY_INSERT = array();
			foreach ($FORMULARIO as $KEY => $VALUE) {
				$ARRAY_INSERT[$VALUE["name"]] = $VALUE["value"];
			}
            $vuelos = DB::connection('mongodb')->table('Vuelos')
				->where('origen', 'Vilanova i la Geltrú')
				->where('destino', $ARRAY_INSERT["destino"])
				->where('fecha', '14/05/2020')
				->get();
			//dd($vuelos);
			echo json_encode($vuelos);
    }
	
		public function Ver() {
		   return view('vuelos');
    }
}