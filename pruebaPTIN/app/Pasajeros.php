<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Pasajeros extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Pasajeros';

    protected $fillable = [

        'id_user', 'nombre', 'apellidos', 'nacio', 'genero', 'vip', 'disabled', 'telefono', 'perfil', 'username', 'password', 'historico'

    ];

}