<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $table='restaurante'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idrestaurante";

    public $timestamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'nombrerest',
        'idrestaurante',
        
    	'descripcion',
    	'domicilio',
    	'telefono',
    	'notablets',
    	'horarios',
    	'logo',
    	'latitud',
    	'longitud',
    	'slogan'
    ];

    protected $guarded =[
    ];
}
