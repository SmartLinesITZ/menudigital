<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restaurante;
use Illuminate\Support\Facades\Redirect;
use DB;

use sisForrajes\Http\Requests\RestFormRequest;

class RestController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
      $restaurantes=new Restaurante;
       return view('adminapp.rest.index',["restaurantes"=>$restaurantes]);
    }


    public function create()
    {
         return view("adminapp.rest.create",[]);
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
