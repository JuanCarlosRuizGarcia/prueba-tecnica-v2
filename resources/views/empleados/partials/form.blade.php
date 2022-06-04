<div class="form-group {{$errors->has('nombre') ? 'has-error' : ''}}">
	{!!Form::label('nombre','Nombre Completo *')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','required','id' => 'nombre'])!!}
	{{-- <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre',$empleado->nombre)}}"> --}}
	{!!$errors->first('nombre','<span class=help-block>:message</span>')!!}
</div>
<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
	{!!Form::label('email','Correo Electronico *')!!}
	{!!Form::email('email',null,['class'=>'form-control','required','id' => 'email'])!!}
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
	{!!Form::textarea('descripcion',null,['class' => 'form-control','rows'=>'5','cols'=>'20','required'])!!}
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
	<input type="submit" value="Guardar" class="btn btn-primary">
</div>