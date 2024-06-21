<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserAdminController
{

    public function index()
    {
        $users = App::get('database')->selectAll('users');
        // Obtém Banco de Dados e seleciona tudo
        return view('site/ListaDeUsuarios_ComModal',compact('users')); //Compact Transforma em array
    }
    public function create(){
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        App::get('database')->insert('users',$parameters);

      header('Location: /users'); 
    }

     public function edit(){
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        $id = $_POST['id'];
        App::get('database')->edit('users',$id, $parameters);

        header('Location:/users'); 
     }
     public function delete(){
        $id= $_POST['id'];
        App::get('database')->delete ('users',$id);
        header ('location:/users'); 
    }

}
?>