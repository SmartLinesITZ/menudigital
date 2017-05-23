@extends('layouts.rest')
@section('contenido')
<div class="big-padding text-center black-text">
	<div class="center-align">
		<h1>Listado de  platillos</h1>
	</div>
</div>
<div class="right-align">
	@include('adminrest.menu.search')
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<table class="centered responsive-table highlight">
			<thead>
				<tr>
					<th>Platillo</th>
					<th>Imagen</th>
					<th>Descripción</th>
					<th>Precio</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($platillos as $p)
				<tr>
					<td>{{ $p->nombreplatillo}}</td>
					<td><img src="{{ $p->imagen}}" alt="Imagen" width="120px" height="120px"/></td>
					<td>{{ $p->descripcion}}</td>
					<td>${{ $p->precio}}</td>
					<td>
						<a href="#" class="btn-floating waves-effect waves-light blue"><i class="material-icons">edit</i></a>
						<a href="#modal1" class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
						<div id="modal1" class="modal">
					    <div class="modal-content">
					      <h4>Confirmar Eliminación</h4>
					      <p>¿Realmente deseas eliminar este platillo?</p>
					    </div>
					    <div class="modal-footer">
					    	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Si, eliminalo</a>
	                       	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">No, gracias</a>
					    </div>
					  </div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $platillos->render() !!}
	</div>
</div>
<div class="floating">
	<a href="{{url('adminrest\menu\create')}}" class="btn-floating btn-large waves-effect waves-light green">
		<i class="material-icons">add</i>
	</a>
</div>

@endsection