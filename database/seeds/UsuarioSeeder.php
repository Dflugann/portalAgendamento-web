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
          'name'=>'Flavio',
          'phone' => '965459012',
          'email'=>'flavio@gmail.com',
          'imagem'=> 'https://media.licdn.com/dms/image/C4D03AQEzvaR_XIZkhg/profile-displayphoto-shrink_200_200/0?e=1524895200&v=alpha&t=ZZHxcxW3JXaPZ5VEIXyPTYp1_QUlnrLybCSyflyOMb8',
          'user'=>'flaaps',
          'password'=>bcrypt("123456"),
          'status'=>'sim',
        ];


        if (User::where('user','=',$dados['user'])->count()) {
            $usuarios = User::where('user','=',$dados['user'])->first();
            $usuarios->update($dados);
            echo "Usuario alterado!";
        }else {
          User::create($dados);
          echo "Usuario criado";
        }
    }
}
