<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaFormRequest;

class HomeController extends Controller
{
  public function hrest()
  {
    return view("homerest",[]);
  }


  public function happ()
  {
       return view("homeapp",[]);
  }


}
