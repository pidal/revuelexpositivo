@extends('layouts.default')

@section('main')

	<h2>Crear Concurso</h2>

	{{ Form::open(array('route' => 'concursos.store')) }}
		{{Form::token()}}
		<ul>
	        <li>
	            {{ Form::label('nombre', 'nombre:') }}
	            {{ Form::text('nombre') }}
	        </li>

	        {{Form::submit('Click Me!')}}
		</ul>
	{{ Form::close() }}

	@if ($errors->any())
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	@endif

@stop