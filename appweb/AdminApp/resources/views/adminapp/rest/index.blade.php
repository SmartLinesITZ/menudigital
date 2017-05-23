@extends('layouts.app')
@section('contenido')
<div class="big-padding text-center  whitw-text">
	<h1>Restaurantes</h1>
</div>
<div class="">
	<table class="table table-bordered">
		<thead>
		<tr>
      <td>Nombre del Rest.</td>
			<td>Admin</td>
			<td>Correo</td>
			<td>Telefono</td>
			<td>N° Tablets</td>
			<td>Acciones</td>
		</tr>
		</thead>
		<tbody>
			@foreach ($restaurantes as $rest)
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a class="waves-effect waves-light btn blue">Editar</a>
					<a class="waves-effect waves-light  btn red">Borrar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="floating">
	<a href="{{url('/products/create')}}" class="btn-floating btn-large waves-effect waves-light green">
		<i class="material-icons">add</i>
	</a>
</div>

@endsection
