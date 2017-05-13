<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria'; //entre comillas simples el nombre de tabla como esta en la base de datos

    protected $primaryKey="idcategoria";

    public $timetamps=false;//Laravel automaticamente te genera dos tabla el false es para que no las genere

    protected $fillable =[
    	'idplatillo',
    	'nomcategoria',
    	'descripcion'
    ];

    protected $guarded =[
    ];
}
