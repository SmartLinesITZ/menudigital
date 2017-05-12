@extends('layouts.rest')
@section('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nuevo articulo</h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>
{!!Form::open(array('url'=>'adminrest/menu','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
{{Form::token()}}
<div class="row">
	<div class="col s12">

		<div class="col s12"><h3 class="center-align">Agregar Platillo</h3></div>
		<div class="col s10 offset-s1 card-panel">
			<div class="row">
				<div class="col s6">
					<label>Cetgorira</label>
					<select class="browser-default" name="categoria">
						<option value="" disabled selected>Entra</option>
						<option value="1">Ensalada</option>
						<option value="2">Botana</option>
						<option value="3">Platillo fuerte</option>
					</select>
				</div>
				<div class="input-field col s6">
					<input id="last_name" type="text" name="categoria" value="{{old('categoria')}}"" class="validate">
					<label for="last_name">Agregar Categoria</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input  id="nombre" type="text" name="nombreplatillo" value="{{old('nombreplatillo')}}" class="validate">
					<label class="active" for="Nombre Platillo">Nombre del platillo</label>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input  id="calle" type="number" name="precio" value="{{old('precio')}}""valu class="validate">
						<label class="active" for="Usuario">Precio</label>
					</div>

					<div class="row">
						<div class="input-field col s10 offset-s1">
							<textarea id="textarea1" name="descripcion" value="{{old('descripcion')}}"" class="materialize-textarea"></textarea>
							<label for="textarea1">Descripcion</label>
						</div>
					</div>
					<div closs="row">
						<div class="input-field col s4">
							<button class="btn waves-effect waves-light" type="submit" name="action">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>



		<?php//################################################### MENU #############################################################?>
		<div class="col s10 offset-s1  card-panel ">
			<div class="col s12"><h3 class="center-align">Menu</h3></div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Categoria</td>

					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Platillo</td>
						<td>$</td>
					</tr>
				</tbody>
			</table>
		</div>

		<?php//################################################### Ingredientes #############################################################?>

		<div class="col s10 offset-s1 card-panel ">
			<div class="col s12"><h3 class="center-align">Ingredientes del platillo</h3></div>
			<div class="row">

				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente</label>
				</div>
				<div class="input-field col s3">
					<a class="btn-floating	 waves-effect waves-light"><i class="material-icons">add</i></a>
				</div>
			</div>
		</div>
		{!!Form::close()!!}



		@endsection
