<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use View;
use DB;
use Illuminate\Routing\Route;
use Response;
use App\Exceptions\Handler;
use Mail;
class ContacteController extends Eloquent

{

    public function formulario(Request $request) {
        if(isset($request)) {
            $FORMULARIO = json_decode(utf8_encode(base64_decode($request->input("formulario"))), true);

            foreach ($FORMULARIO as $KEY => $VALUE) {
                $ARRAY_INSERT[$VALUE["name"]] = $VALUE["value"];   
            }
            Mail::send('email.formulario', ['nombre' => $ARRAY_INSERT["NOMBRE"], 'email' => $ARRAY_INSERT["EMAIL"], 'mensaje' => $ARRAY_INSERT["MENSAJE"]], function($message) use ($ARRAY_INSERT){
                $message->to('a3ptin@gmail.com', 'VIA-Airport')
                ->subject('[VIA] - DUBTES');
            });

            echo json_encode(array("estado" => "ok"));
        }
    }
}