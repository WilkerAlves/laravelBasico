@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h2 class="center">Lista de cursos</h2>
    <div class="row">
      @foreach ($cursos as $curso)
       <div class="col s12 m4">
         <div class="card">
           <div class="card-image">
             <img src="{{asset($curso->imagem)}}"  height="200" >
           </div>
           <div class="card-content">
             <h4>{{$curso->titulo}}</h4>
             <p>{{$curso->descricao}}</p>
           </div>
           <div class="card-action">
             <a href="#">Mais detalhes</a>
           </div>
         </div>
       </div>
      @endforeach
     </div>
     <div class="row center">
       {{$cursos->links()}}
     </div>
  </div>


@endsection
