<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table='usuarios'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idusuarios";

    public $timetamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'correo',
    	'nombre',
    	'telefono',
    	'nocuenta',
    	'tipousuario',
    	'idrestaurante'
    ];

    protected $guarded =[
    ];
}
