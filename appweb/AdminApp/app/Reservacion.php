<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $table='reservacion'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idreservacion";

    public $timetamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'idrestaurante',
    	'idusuario',
    	'nopersonas',
    	'nopersonas',
    	'horallegada'
    ];

    protected $guarded =[
    ];
}
