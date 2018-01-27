<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index(){
      $cursos = Curso::all();
      return view('admin.cursos.index', compact('cursos'));
    }

    public function adicionar(){
      return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req){
      $dados = $req->all();
      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $numero =  rand(1111,9999);
        $pastaSalvar = "img/cursos";
        $extensao = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$numero.".".$extensao;
        $imagem->move($pastaSalvar,$nomeImagem);
        $dados['imagem'] = $pastaSalvar."/".$nomeImagem;
      }
      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }
      Curso::create($dados);
      return redirect()->route('admin.cursos');
    }

    public function editar($id){
      $curso = Curso::find($id);
      return view('admin.cursos.editar', compact('curso'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();
      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $numero =  rand(1111,9999);
        $pastaSalvar = "img/cursos/";
        $extensao = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$numero.".".$extensao;
        $imagem->move($pastaSalvar,$nomeImagem);
        $dados['imagem'] = $pastaSalvar."/".$nomeImagem;
      }
      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }
      Curso::find($id)->update($dados);
      return redirect()->route('admin.cursos');
    }

    public function deletar($id){
      Curso::find($id)->delete();
      return redirect()->route('admin.cursos');
    }
}
