<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaFormRequest;

class ServicioController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {
    return view("adminrest.servicios.index",[]);
  }


  public function create()
  {
       return view("adminest.servicos.create",[]);
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
