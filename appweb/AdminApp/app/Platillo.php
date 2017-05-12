<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $table='platillo'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idplatillo";

    public $timestamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'idrestaurante',
        'nombreplatillo',
    	'imagen',
    	'categoria',
    	'precio',
    	'descripcion'
    ];
    protected $guarded =[
    ];
}
