<?php

use PHPMailer\Test\PHPMailer\LocalizationTest;

    session_start();
    if(!$_SESSION['sessao']){
        return redirect('login');
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/public/css/dashboard.css">
</head>
<body>
    <div id="logobat">
        <img src="/public/assets/Logo_Batcaverna_Preto (2).svg">
    </div>
    <div id="barraMeio">
        <a href="/">
            <ion-icon name="home-outline"></ion-icon>
        </a>
        <a href="/posts">
            <ion-icon name="newspaper-outline"></ion-icon>
        </a>
        <a href="/users">
            <ion-icon name="people-outline"></ion-icon>
        </a>
        <a href="logout">
            <ion-icon name="log-out-outline"></ion-icon>
        </a>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>