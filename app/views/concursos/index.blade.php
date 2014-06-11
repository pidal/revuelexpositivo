@extends('layouts.default')

@section('main')

	<h1>Mostrar concursos</h1>

	<ul>
	@foreach($concursos as $c)
		<li><a href="{{route('concursos.show', $c->id)}}">{{$c->nombre}}</a></li>
	@endforeach
	</ul>
@stop