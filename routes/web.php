<?php

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'Site\LoginController@entrar']);


Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);
Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);

Route::group(['middleware'=>'auth'],function(){
  Route::get('admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);
  Route::get('admin/cursos/',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
  Route::get('admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
  Route::post('admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
  Route::get('admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
  Route::put('admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
});
