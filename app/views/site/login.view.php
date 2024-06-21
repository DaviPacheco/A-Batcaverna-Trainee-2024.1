<?php
session_start();
require_once 'app/views/include/LoginView.php';
if($_SESSION['sessao']){
    return redirect('dashboard');
}
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>batcavrna</title>
    <link rel="stylesheet" href= "../../../public/css/login.css"/>
    <sript src="../../../public/js/index.js"></sript>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="principal">
      <div id="batc"><img src="../../../public/assets/batcaverna2.png" ></div>
      <div class="simbolo"><img src="../../../public/assets/sb.png" ></div>
        <div class="segundaria">  
            <div class="alfred"><img src="../../../public/assets/alfred.png" ></div> 
            <div class="ptres">      
      <div class="bv"><p class="hbv">Bem Vindo(a) à BATCAVERNA!</p></div>
      <div class="login">
        <form class="formulario" action="/login" method="post">
            <div class="name">  <input type="text" name="username" placeholder="e-mail" /> <i class="bi bi-person"></i> </div>
           <div class="name"> <input type="password" id="senha" name="pwd" placeholder="senha" />  <i class="bi bi-eye" id="btn" onclick="iconsenha()"></i>   </div>
            <button class="buttonred"type="submit" name="submit">Login<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M.75 8S5 7 8 9c0 0 .5 3.75 2.5 3.75V11s.5 1 1.5 1s1.5-1 1.5-1v1.75C15.5 12.75 16 9 16 9c3-2 7.25-1 7.25-1c-2 1-2.25 4.5-2.25 4.5c-4 0-4 3.25-4 3.25c-5-1-5 2.75-5 2.75s0-3.75-5-2.75c0 0 0-3.25-4-3.25C3 12.5 2.75 9 .75 8"/></svg></button>
        </form>
          <p>
        <?php
        check_login_erros();
        ?>
        </p>
      </div>
      </div>
    </div>
    <script src="../../../public/js/iconsenha.js"></script>
  </body>
</html>
