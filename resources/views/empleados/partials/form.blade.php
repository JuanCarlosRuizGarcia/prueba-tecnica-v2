<div class="form-group">
	<p class="warnings" id="warnings"></p>
</div>


<div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
	{!!Form::label('nombre','Nombre Completo *')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','id' => 'nombre'])!!}
	{{-- <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre',$empleado->nombre)}}"> --}}
	{!!$errors->first('nombre','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
	{!!Form::label('email','Correo Electronico *')!!}
	{!!Form::email('email',null,['class'=>'form-control','id' => 'email'])!!}
	{{-- <input type="email" name="email" class="form-control" id="email" value="{{ old('email',$empleado->email)}}"> --}}
	{!!$errors->first('email','<span class=help-block>:message</span>')!!}
</div>

<div class="form-group {{$errors->has('sexo') ? 'has-error' : ''}}">
	{!!Form::label('sexo','Sexo *')!!}
	<label>
		{!!Form::radio('sexo','M')!!} Masculino
	</label>
	<label>
		{!!Form::radio('sexo','F')!!} Femenino
	</label>
	{!!$errors->first('sexo','<span class=help-block>:message</span>')!!}
</div>

<div class="form-group {{$errors->has('area_id') ? 'has-error' : ''}}">
	{!!Form::label('area_id','Area *')!!}
	{!!Form::select('area_id',$areas,null,['class' => 'form-control'])!!}
	{!!$errors->first('area_id','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('descripcion') ? 'has-error' : ''}}">
	{!!Form::label('descripcion','Descripción *')!!}
	{!!Form::textarea('descripcion',null,['class' => 'form-control','rows'=>'5','cols'=>'20'])!!}
	{{-- <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control">
		{{old('descripcion',$empleado->descripcion)}}
	</textarea> --}}
	{!!$errors->first('descripcion','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('roles') ? 'has-error' : ''}}">
	{!!Form::label('roles','Roles *')!!}
		@foreach($roles as $rol)
			<div class="form-group">
					<label>
						{!!Form::checkbox('roles[]',$rol->id)!!} {{$rol->nombre}}
					</label>
			</div>
		@endforeach
</div>
<div class="form-group">
	<input type="submit" value="Guardar" class="btn btn-primary" id="btn-Guardar">
</div>


@section('scripts')
	<script type="text/javascript">
		let hasError = false;
		let warnings = "";
		const nombre = document.getElementById("nombre");
		const email = document.getElementById("email");
		const area_id = document.getElementById("area_id");
		const descripcion = document.getElementById("descripcion");
		const roles = document.getElementById("roles");
		const descripcionMensaje = document.getElementById("warnings");
		const form = document.getElementById("form");

		form.addEventListener("submit",e=>{
			let warnings = ""
			descripcionMensaje.innerHTML = ""

			let formatEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

			if (nombre.value.length == 0 || nombre.value == null || /^\s+$/.test(nombre)) {
				warnings += `Error, El nombre es obligatorio <br>`
				hasError = true
			} else if (nombre.value.length<10) {
				warnings += `Error, El nombre es muy corto debe tener 10 carecteres o mas <br>`
				hasError = true
			}

			if (email.value.length == 0 || email.value == null) {
				warnings += `Error, El email es obligatorio <br>`
				hasError = true
			} else if (!formatEmail.test(email.value)) {
				warnings += `Error, El email no es valido <br>`
				hasError = true
			}

			if(!document.querySelector('input[name="sexo"]:checked'))
			{
		      warnings += `Error, el campo sexo es Obligatorio <br>`
		      hasError = true;
		    }

			if (descripcion.value === '' || descripcion.value === null)
			{
				warnings += `Error, la descripcion es obligatoria <br>`;
				hasError = true;
			} else if (descripcion.value.length<5)
			{
				warnings += `Error, La descripcion es muy corta debe tener 5 carecteres o mas <br>`;
				hasError = true;
			}

			if (hasError) {
				descripcionMensaje.innerHTML = warnings
				e.preventDefault()
			}
			hasError = false;
		})
	</script>
@stop
