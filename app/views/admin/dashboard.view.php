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
    <!-- links da sidebar -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../../../public/css/sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php require_once "sidebar.view.php"?>
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