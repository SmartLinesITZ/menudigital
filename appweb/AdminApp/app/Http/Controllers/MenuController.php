<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Requests\Menu;
use App\Platillo;
use DB;

class MenuController extends Controller
{
  public function __construct()
  {

  }
  public function index(Request $request)
  {
   
      
         if ($request)
    {
        $query=trim($request->get('searchText'));
        $platillos=DB::table('platillo as p')
        ->join('categoria as c', 'p.idcategoria',"=","c.idcategoria")
        ->join('restaurante as r', 'c.idrestaurante',"=","r.idrestaurante")
        ->select('p.idplatillo','p.nombreplatillo','p.imagen','c.nomcategoria','p.precio','p.descripcion')
        ->where('p.nombreplatillo','LIKE','%'.$query.'%')
        ->orderBy('p.idplatillo','desc')
        ->paginate(7);
        return view("adminrest.menu.index",["platillos"=>$platillos,"searchText"=>$query]);
        //return reponse()->json($request, 200);
      
      }

  }

  public function create()
  {
    //
    //->join('restaurante as r', 'p.idplatillo',"=","r.idrestaurante")
    $categorias=DB::table('categoria as c')->
    join('restaurante as r', 'r.idrestaurante',"=","c.idrestaurante")
    ->where('r.idrestaurante','=','1')->get();
      return view("adminrest.menu.create",["categorias"=>$categorias]);
  }


  public function store(Menu $request)
  {
      $platillo=new Platillo;
      
      $platillo->nombreplatillo=$request->get('nombreplatillo');
      $platillo->precio=$request->get('precio');
      $platillo->idcategoria=$request->get('idcategoria');
      $platillo->descripcion=$request->get('descripcion');
      $platillo->save();
      return Redirect::to('adminrest/menu');
  }


  public function show($id)
  {
       
  }


  public function edit($id)
  {
      return view("adminrest.menu.edit",["platillo"=>Platillo::findOrFail($id)]);
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
