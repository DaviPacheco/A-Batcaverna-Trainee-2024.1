<?php

declare(strict_types=1);

function check_login_erros ()
{
 if (isset($_SESSION['erros_login'])) {
    $erros = $_SESSION['erros_login'];

    echo "<br>";
    foreach ($erros as $erro) {
        echo '<p class ="errormsg">' . $erro . '</p>';

        unset($_SESSION['erros_login']);
    }
 }
}