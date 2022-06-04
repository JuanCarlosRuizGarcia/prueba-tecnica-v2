@extends('layout')
@section('content')

@if(session('info'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{session('info')}}
	</div>
@endif


<h3>Listado de Empleados</h3>
<a href="{{ route('empleados.create')}}" class="btn btn-primary pull-right">
	<span class="glyphicon glyphicon-user"></span>
	Crear
</a>

<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Email</th>
		<th>Sexo</th>
		<th>Area</th>
		<th>Boletin</th>
		<th>Modificar</th>
		<th>Eliminar</th>
	</thead>
	<tbody>
		@foreach($empleados as $empleado)
			<tr>
				<td>{{$empleado->nombre}}</td>
				<td>{{$empleado->email}}</td>
				<td>{{$empleado->sexo}}</td>
				<td>{{$empleado->area->nombre}}</td>
				<td>{{$empleado->boletin}}</td>
				<td>
					<a href="{{ route('empleados.edit',$empleado)}}" class="btn btn-primary btn-sm">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</td>
				<td>
					{!!Form::open(['route' => ['empleados.destroy',$empleado],'method'=>'DELETE'])!!}
						<button type="submit" class="btn btn-danger btn-sm">
							<span class="glyphicon glyphicon-remove"></span>
						</button>
					{!!Form::close()!!}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@stop
