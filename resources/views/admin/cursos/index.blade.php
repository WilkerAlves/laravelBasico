@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h2 class="center">Lista de cursos</h2>
    <div class="row">
      <table>
        <thead>
          <th>Id</th>
          <th>Titulo</th>
          <th>Descrição</th>
          <th>Imagem</th>
          <th>Publicado</th>
          <th>Ação</th>
        </thead>
        <tbody>
          @foreach($cursos as $curso)
            <tr>
              <td>{{$curso->id}}</td>
              <td>{{$curso->titulo}}</td>
              <td>{{$curso->descricao}}</td>
              <td><img src="{{asset($curso->imagem)}}" alt="{{$curso->titulo}}" width="100" height="100"></td>
              <td>{{$curso->publicado}}</td>
              <td>
                <a class="btn deep-orange" href="{{route('admin.cursos.editar',$curso->id)}}">Editar</a>
                <a class="btn red" href="{{route('admin.cursos.deletar',$curso->id)}}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
    </div>
  </div>


@endsection
