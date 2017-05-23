<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table='orden'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idorden";

    public $timetamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'idpedido'
    ];

    protected $guarded =[
    ];
}
