@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h2 class="center">Adicionar cursos</h2>
    <div class="row">
      <form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.cursos._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
@endsection
