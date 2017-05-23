<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendido extends Model
{
    protected $table='categoria'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idpedido";

    public $timetamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'idusuario',
    	'idrestaurante',
    	'tiposervicio',
    	'montototal',
    	'estado'
    ];

    protected $guarded =[
    ];
}
