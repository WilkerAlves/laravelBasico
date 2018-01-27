<div class="input-field">
  <input type="text" name="titulo" value="{{isset($curso->titulo)? $curso->titulo : ''}}">
  <label for="titulo">Título</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{isset($curso->descricao)? $curso->descricao : ''}}">
  <label for="descricao">Descrição</label>
</div>

<div class="input-field">
  <input type="text" name="valor" value="{{isset($curso->valor)? $curso->valor : ''}}">
  <label for="valor">Valor</label>
</div>

<div class="file-field input-field">
  <div class="btn">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($curso->imagem))

  <div class="">
    <img src="{{asset($curso->imagem)}}" width="100" height="100" alt="">
</div>
@endif

<div class="">
  <p>
    <input type="checkbox" id="test5" name="publicado" value="true" {{isset($curso->publicado)&& $curso->publicado == 'sim' ? 'checked':''}}  />
    <label for="test5">Publicar?</label>
  </p>
  <br><br>
</div>
