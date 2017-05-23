{!! Form::open(array('url'=>'adminrest/menu','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
	<div class="col s3 offset-s8">
		<div class="input-field">
			<input type="text" class="text" name="searchText" id="buscar" value="{{$searchText}}">
			<label for="buscar">Buscar . . .</label>
		</div>
	</div>
	<div class="col s1">
				<button type="submit" class="btn-floating  waves-effect waves-light cyan">
					<i class="material-icons">search</i>
				</button>
	</div>

{{Form::close()}}
