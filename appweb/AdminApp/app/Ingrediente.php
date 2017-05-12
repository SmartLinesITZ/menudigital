<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table='ingrediente'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idingrediente";

    public $timetamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'idplatillo',
    	'descripcion'
    ];
    
    protected $guarded =[
    ];
}
