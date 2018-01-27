<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contato;

class ContatoController extends Controller{

  public function index(){
	$contatos = [
		["nome"=>"Wilker Alves Nogueira", "telefone"=>"11984438997"],
		["nome"=>"Joana Darc", "telefone"=>"1199999999"]
	];
	
	$contato = new Contato();
	dd($contato->lista());

   	return view('contato.index', compact('contatos'));
   }

   public function criar(Request $req){
   	dd($req[name]);
   	return "esse é o criar do contato controller";
   }

   public function editar(){
   	return "esse é o editar do contato controller";

   }
}
