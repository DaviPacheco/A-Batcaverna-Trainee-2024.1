<?php
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    // pega dps
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'core/database/Connection.php'; // ?
        require_once '../include/LoginController.php';

        //Error handlers
        $erros =[];

    if (is_empty($username, $pwd)){
        $erros["input_vazio"]= "Preencha todos os campos!";
    }

    $result = get_user(Connection::make(App::get('config')['database']), $username);// object pdo

     if (is_user_wrong($result)){
         $erros["login_incorrect"] = "Informação de login incorreta!";
     }
     if (!is_user_wrong($result) && is_pwd_wrong($pwd, $result["pwd"])){
         $erros["login_incorrect"] = "Informação de login incorreta!";
     }

    session_start(); // >> ?

    if ($erros){
        $_SESSION['erros_login'] = $erros;
        header("location: ../index.php");
        die();
    }

    } catch (PDOException $e) {
        die("Consulta falhou: " . $e->getMessage());
    }
}
else{
    header("location: ../index.php");
    die();
}

/*
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

}
*/