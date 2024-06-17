<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\database\Connection;

use Exception;


require_once 'core/database/Connection.php'; // ?
require_once 'app/views/include/LoginController.php';

class ExampleController
{

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

            if (is_empty($username, $pwd)){
                $erros["input_vazio"]= "Preencha todos os campos!";
            }

            $result = get_user(Connection::make(App::get('config')['database']), $username);// object pdo

            if (is_user_wrong($result)){
                $erros["login_incorrect"] = "Informação de login incorreta!";
            }

            if (!is_user_wrong($result) && is_pwd_wrong($pwd, $result["password"])){
                $erros["login_incorrect"] = "Informação de login incorreta!";
            }

            session_start(); // >> ?

            if ($erros){
                $_SESSION['erros_login'] = $erros;
                header("location: /login");
                die();
            }

        } catch (PDOException $e) {
            die("Consulta falhou: " . $e->getMessage());
        }
        header("location: /"); // pra alguma pagina, provavelmente a landing page
        die();
    }
}


?>