@extends('layout')

@section('title','Crear Empleado')

@section('content')
<h1>Crear Empleado</h1>

@include('errors.error-validacion')

<div class="alert alert-info">
	Los campos con asterisco (*) son obligatorios
</div>
{!!Form::open(['route' => ['empleados.store'], 'method' => 'POST'])!!}
	@include('empleados.partials.form')
{!!Form::close()!!}
@stop