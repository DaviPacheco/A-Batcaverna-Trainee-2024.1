<?php

declare(strict_types=1);

function check_login_erros ()
{
 if (isset($_SESSION['erros_login'])) {
    $erros = $_SESSION['erros_login'];

    echo "<br>";
    foreach ($erros as $erro) {
        echo  $erro . "<br>"; // 56,10

        unset($_SESSION['erros_login']);
    }
 }
}