<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaFormRequest;

class PedidoController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {
      if($request)
      {
        $query=trim($request->get('searchText'));
        $articulos=DB::table('articulo as a')
        ->join('categoria as c', 'a.id_Categoria',"=","c.id")
        ->select('a.id','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.imagen','a.estado')
        ->where('a.nombre','LIKE','%'.$query.'%')
        ->orwhere('a.codigo','LIKE','%'.$query.'%')
        ->orderBy('a.id','desc')
        ->paginate(7);
        return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);
      }
      return view("adminrest.pedidos.index",[]);
  }


  public function create()
  {
       return view("adminrest.pedidos.create",[]);
  }


  public function store(Request $request)
  {

  }


  public function show($id)
  {
      //
  }


  public function edit($id)
  {
      //
  }


  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
