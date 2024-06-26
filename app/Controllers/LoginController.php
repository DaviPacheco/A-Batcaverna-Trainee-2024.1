<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\database\Connection;
use App\Core\Database\QueryBuilder;

use Exception;

/*
require_once 'core/database/Connection.php'; // ?
require_once 'app/views/include/LoginController.php';
*/
class LoginController
{
    public function logout()
    {
        session_start();
        unset($_SESSION['sessao']);
        session_destroy();
        return redirect('login');
    }

    public function landing()
    {
        $contagem_linhas = App::get('database')->countAll('posts');
        if($contagem_linhas<=5)
        {
            $fim=$contagem_linhas;
        }
        else{
            $fim=5;
        }
        $posts = App::get('database')->selectAll('posts', 0, $fim);
        $users = App::get('database')->selectAll('users');
        return view('site/LandingPage',compact('posts', 'users','contagem_linhas'));
    }

    public function dash()
    {
        return view('admin/dashboard');
    }

    public function index()
    {
        return view('site/index');
    }
    public function login()
    {
        return view('site/login');
    }
    public function logar()
    {
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

        try {

            //Error handlers
            $erros =[];

            if (empty($username) || empty($pwd)){
                $erros["input_vazio"]= "Preencha todos os campos!";
            }
            $builder = new QueryBuilder(Connection::make(App::get('config')['database']));
            $result = $builder->get_user($username);// object pdo

            if (!$result){
                $erros["login_incorrect"] = "Informação de login incorreta!";
            }

            if (!(empty($username) || empty($pwd)) && !($pwd === $result['password'])){
                $erros["login_incorrect"] = "Informação de login incorreta!";
            }

            session_start(); // >> ?

            if ($erros){
                $_SESSION['erros_login'] = $erros;
                header("location: /login");
                die();
            }

        } catch (\PDOException $e) {
            die("Consulta falhou: " . $e->getMessage());
        } 
            session_start();
            $_SESSION['sessao'] = true;
            $_SESSION['users'] = $result;
        header("location: /dashboard"); // pra alguma pagina, provavelmente a landing page
        die();
    }
    
}


?>