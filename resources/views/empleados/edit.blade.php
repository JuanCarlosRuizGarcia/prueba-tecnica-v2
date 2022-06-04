@extends('layout')

@section('title','Editar Empleado')

@section('content')
<h1>Editar Empleado</h1>

@include('errors.error-validacion')

<div class="alert alert-info">
	Los campos con asterisco (*) son obligatorios
</div>

{!!Form::model($empleado, ['route' => ['empleados.update',$empleado],'method' => 'PUT'])!!}
	@include('empleados.partials.form')
{!!Form::close()!!}

@stop