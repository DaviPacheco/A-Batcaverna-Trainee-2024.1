<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>sidebar</title>
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav id="Sidebar">
       <!-- <div id="sair">
            <a href="#">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>-->
        <div id="space">

        </div>
        <div id="caixa_sidebar">
            <ul id="items">
                <li class="item"> <!-- o class é para aplicar o css em tudo que possui a mesma classe-->
                    <a href="/">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="descricao_do_item">
                            Home
                        </span>
                    </a> 
        
                </li>
                <li class="item"> <!-- o class é para aplicar o css em tudo que possui a mesma classe-->
                    <a href="/users">
                        <span class="icon"><i class="bi bi-people"></i></span>
                        <span class="descricao_do_item">
                            Users
                        </span>
                    </a> 
        
                </li>
                <li class="item"> <!-- o class é para aplicar o css em tudo que possui a mesma classe-->
                    <a href="/posts">
                        <span class="icon"><i class="bi bi-postcard"></i></span>
                        <span class="descricao_do_item">
                            Posts
                        </span>
                    </a> 
        
                </li>
                <li class="item"> <!-- o class é para aplicar o css em tudo que possui a mesma classe-->
                    <a href="/dashboard">
                        <span class="icon"><i class="bi bi-columns-gap"></i></span>
                        <span class="descricao_do_item">
                            Dashboard
                        </span>
                    </a> 
        
                </li>
                <li class="item"> <!-- o class é para aplicar o css em tudo que possui a mesma classe-->
                    <a href="/login">
                        <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="descricao_do_item">
                            Logout
                        </span>
                    </a> 
        
                </li>
              </ul>
        </div>
      


    </nav>
    <script src="script.js"></script>
</body>
</html>