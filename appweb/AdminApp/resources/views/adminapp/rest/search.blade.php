{!! Form::open(array('url'=>'adminapp/rest','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
	<div class="col s3 offset-s6">
		<div class="input-field">
			<input type="text" class="text" name="searchText" id="buscar" value="{{$searchText}}">
			<label for="buscar"><h5>Buscar . . .</h5></label>
		</div>
	</div>
	<div class="col s1">
				<button type="submit" class="btn-floating  waves-effect waves-light cyan">
					<i class="material-icons">search</i>
				</button>
	</div>

{{Form::close()}}
