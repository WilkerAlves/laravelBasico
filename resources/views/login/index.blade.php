@extends('layout.site')

@section('titulo','Login')

@section('conteudo')
  <div class="container">
    <h2 class="center">Area restrita</h2>
    <div class="row">
      <form class="" action="{{route('login.entrar')}}" method="post">
        {{csrf_field()}}
        <div class="input-field">
          <input type="email" name="email">
          <label for="email">E-mail</label>
        </div>
        <div class="input-field">
          <input type="password" name="senha">
          <label for="senha">Senha</label>
        </div>
        <button class="btn blue">Entra</button>
      </form>
    </div>
@endsection
