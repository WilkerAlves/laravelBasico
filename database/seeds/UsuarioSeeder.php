<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        'name' => 'Wilker Alves',
        'email' => 'wilkeralves97@gmail.com',
        'password' => bcrypt("123")
      ];

      if(User::where('email','=',$dados['email'])->count()){
        $usuario = User::where('email','=',$dados['email'])->first();
        $usuario->update($dados);
        echo 'usuario alterado';
      }else{
        User::create($dados);
        echo "usuario criado";
      }

      $usuario = new User;
    }
}
