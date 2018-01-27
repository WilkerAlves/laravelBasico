@extends('layout.site')

@section('titulo','Contato')

@section('conteudo')
	<h1>view index</h1>
	@foreach($contatos as $contato)
		<p>{{$contato['nome']}}</p>
		<p>{{$contato['telefone']}}</p>
	@endforeach

@endsection
