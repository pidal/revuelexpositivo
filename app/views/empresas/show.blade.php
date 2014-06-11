@extends('layouts.default')

@section('main')

<h1>Empresa: {{$empresa->nombre}}</h1>

<h3>Esta empresa participa en los siguientes sorteos:</h3>
@foreach($empresa->concursos as $c)
<li><a href="{{route('concursos.show', $c->id)}}">{{$c->nombre}}</a></li>
@endforeach
@stop