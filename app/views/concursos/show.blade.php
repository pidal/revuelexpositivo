@extends('layouts.default')

@section('main')

	<h1>Este es el concurso: {{$concurso->nombre}}</h1>

	<h2>Patrocinado por:</h2>
	@foreach($concurso->empresas as $e)
		{{$e->nombre}},
	@endforeach

	@if($concurso->etapas->count())
		<h2>Etapas:</h2>
		@foreach($concurso->etapas as $e)
			{{$e->descripcion}},
			De: {{$e->ini_etapa}} hasta {{$e->fin_etapa}}
			<hr>
		@endforeach
	@else 
		<h5>No hay etapas en este concursos</h5>
	@endif
@stop