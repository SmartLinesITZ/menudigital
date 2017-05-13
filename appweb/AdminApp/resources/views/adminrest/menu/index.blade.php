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
	<dir class="col s12 m6">
		<table class="centered responsive-table highlight">
			<thead>
				<tr>
					<td>Platillo</td>
					<td>Precio</td>
					<td>Categoria</td>
					<td>Descripcion</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($platillos as $p)
				<tr>
					<td>{{ $p->nombreplatillo}}</td>
					<td>${{ $p->precio}}</td>
					<td>{{ $p->categoria}}</td>
					<td width="550">{{ $p->descripcion}}</td>
					<td>
						<a class="btn-floating waves-effect waves-light blue"><i class="material-icons">edit</i></a>
						<a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</dir>
</div>
<div class="row">
	<div class="col s12 m6">
		<ul class="pagination center">
		    <li class="disabled amber lighten-4"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		    <li class="active amber lighten-1 z-depth-2"><a href="#!">1</a></li>
		    <li class="waves-effect waves-yellow"><a href="#!">2</a></li>
		    <li class="waves-effect waves-yellow"><a href="#!">3</a></li>
		    <li class="waves-effect waves-yellow"><a href="#!">4</a></li>
		    <li class="waves-effect waves-yellow"><a href="#!">5</a></li>
		    <li class="waves-effect waves-yellow"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		</ul>
	</div>
</div>
<div class="floating">
	<a href="{{url('adminrest\menu\create')}}" class="btn-floating btn-large waves-effect waves-light green">
		<i class="material-icons">add</i>
	</a>
</div>

@endsection