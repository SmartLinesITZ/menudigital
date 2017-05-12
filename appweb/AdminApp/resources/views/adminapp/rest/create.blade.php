@extends('layouts.app')
@section('contenido')

<form action="../../../controller/restaurante/control_registro.php" method="post">

		<div class="row">

			<div class="col s12"><h1 class="center-align">Agregar Restaurnte</h1></div>

			<div class="col s12">
				<div class="col s10 offset-s1  ">
					<div class="row m6">
						<h5>Datos personales</h5>
					</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="nombre" id="nombre" type="text" class="validate">
						<label class="active" for="Nombre">Nombre completo</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input name="correo" id="correo" type="text" class="validate">
						<label class="active" for="Correo">Correo</label>
					</div>
					<div class="input-field col s6">
						<input name="telefono" id="telefono" type="text" class="validate">
						<label class="active" for="Telefono">Telefono</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						<input name="nameuser" id="nameuser" type="text" class="validate">
						<label class="active" for="Usuario">Nombre de usuario</label>
					</div>
					<div class="input-field col s6">
						<input name="password"id="password" type="password" class="validate">
						<label class="active" for="clave">Clave</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="nocuenta" id="nocuenta" type="text" class="validate">
						<label class="active" for="nocuenta">Numero de cuenta</label>
					</div>
				</div>
				<div class="row m6">
					<h5>Dirección</h5>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input name="calle" id="calle" type="text" class="validate">
						<label class="active" for="Usuario">calle</label>
					</div>

					<div class="input-field col s4">
						<input name="numero"id="numero" type="text" class="validate">
						<label class="active" for="clave">numero</label>
					</div>

					<div class="input-field col s2">
						<input name="codigopostal"id="codigopostal" type="text" class="validate">
						<label class="active" for="clave">C.P.</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<input name="colonia" id="colonia" type="text" class="validate">
						<label class="active" for="colonia">Colonia</label>
					</div>

					<div class="input-field col s4">
						<input name="municipio"id="municipipo" type="text" class="validate">
						<label class="active" for="municipio">Municipio</label>
					</div>

					<div class="input-field col s4">
						<input name="ciudad"id="ciudad" type="text" class="validate">
						<label class="active" for="ciudad">Ciudad</label>
					</div>
				</div>



				<div class="row m6">
					<h5>Datos del restaurante</h5>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<input name="horario" id="horario" type="text" class="validate">
						<label class="active" for="horario">Horario</label>
					</div>

        <div class="input-field col s8 ">
          <textarea name="descripcion"id="descripcion" class="materialize-textarea"></textarea>
          <label class="active" for="descripcion">Descripcion</label>
				</div>
				<p>
      		<input type="checkbox" class="filled-in" id="desayuno" checked="checked" />
      		<label for="desayuno">Desayuno</label>
    		</p>
				<p>
      		<input type="checkbox" class="filled-in" id="comida" checked="checked" />
      		<label for="comida">Comida</label>
    	</p>
			<p>
      	<input type="checkbox" class="filled-in" id="cena" checked="checked" />
      	<label for="cena">Cena</label>
    	</p>


				<div class="row">
					<div class="input-field col s4">
						<button class="btn waves-effect waves-light" type="submit" name="action">Guardar
						</button>
					</div>

					<div class="input-field col s2">
						<button class="btn waves-effect red" type="reset" name="action">Cancelar

						</button>
					</div>
					</div>
				</div>

</form>


@endsection
