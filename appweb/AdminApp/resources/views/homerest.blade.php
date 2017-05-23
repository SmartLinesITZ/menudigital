@extends('layouts.app')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="col m2 push-m1">
      <img src="../src/img/mapache.png" alt="" class="responsive-img">
    </div>
  </div>
</div>
  <nav class="z-depth-2 teal" role="navigation">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo">Inicio</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="registro.php"><i class="material-icons left">folder_shared</i>Registro</a></li>
          <li><a href="#"><i class="material-icons left">store</i>Restaunrantes</a></li>
          <li><a href="#"><i class="material-icons right">directions_run</i>Cerrar sesión</a></li>
        </ul>
    </div>
  </nav>
  <div class="container">
  <div class="row">
    <div class="col m12">
        <div class="card-panel white z-depth-3">
            <H3 align="center">Bienvenido</H3>
            <div class="row">
              <div class="col m6">
                <a href="registro.php">
              <div class="card-panel amber darken-3 z-depth-5 center">
              <h4 class="white-text">Registro</h4>
                <i class="material-icons center" style="font-size: 100px; color: black;">folder_shared</i>
              </div>
              </a>
          </div>
          <div class="col m6">
              <a href="#">
              <div class="card-panel amber darken-3 z-depth-5 center">
              <h4 class="white-text">Restaurantes</h4>
                <i class="material-icons center" style="font-size: 100px; color: black;">store</i>
              </div>
              </a>
          </div>

        </div>
    </div>
  </div>
  </div>

@endsection
