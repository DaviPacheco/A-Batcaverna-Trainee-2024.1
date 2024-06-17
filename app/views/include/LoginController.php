<?php

declare(strict_types=1);

function is_empty(string $username, string $pwd){
    if(empty($username) || empty($pwd)){
        return true;
    }
    else{
        return false;
    }
}

function get_user(object $pdo, string $username) // object pdo ?
{
    $query = "SELECT * FROM users WHERE email = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function is_user_wrong(bool |array $result){
    if(!$result){
        return true;
    }else{
        return false;
    }
}
function is_pwd_wrong(string $pwd,string $pwdoriginal){
    if($pwd === $pwdoriginal){
        return false;
    }else{
        return true;
    }
}