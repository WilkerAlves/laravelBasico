@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h2 class="center">Editar {{$curso->titulo}}</h2>
    {{-- {{dd($curso->id)}} --}}
    <div class="row">
      <form action="{{route('admin.cursos.atualizar',$curso->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.cursos._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
@endsection
