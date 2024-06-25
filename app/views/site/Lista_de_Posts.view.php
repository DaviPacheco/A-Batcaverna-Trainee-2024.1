<?php



?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
    <link rel="stylesheet" href="/public/css/lista_de_posts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/ModalEdicaoPost.css">
    <!-- links da nav -->
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
        <script defer src="../../../public/js/index.js"></script>
<!-- links do footer -->
        <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
</head>
<body>
  <?php
    require_once "navbar.html";
    ?>
    
           <form id="barra" method="GET" action="">
                        <input id="Pesquisar" value="<?php if(array_key_exists('search',$_GET)){ echo $_GET['search']; } ?>" name="search" placeholder="Pesquisar" >
                        <button type="submit" id="lupa">
                                <ion-icon name="search-outline"></ion-icon>
                        </button>
            </form>
             
              <?php
              $kont=1;
              foreach($posts as $post): 
              ?>
                  <?php if($kont==1){ ?>
                    <span id="post1">
                        <span id="bord1"></span>
                        <span id="batmanDoFuturo1">
                            <img src="<?= $post->image ?>">
                        </span>
                        <span id="titulo1"><?= substr($post->title,0,25) ?></span>
                        <span id="barrinha1"></span>
                        <span id="resumo1"><?= substr($post->content,0,150) ?>...</span>
                        <div id="autor1">Autor: Lex Luthor</div>
                        <button id="lermais1"><a style = "color: white; text-decoration: none;" href="/visualizacao-unica?id=<?= $post->id ?>">Ler Mais</a></button>
                    </span>   
                  <?php $kont++;
                   } 
                    else{ ?>  
                <span id="post<?= $kont ?>">
                    <span id="bord2"></span>
                    <span id="batmanDoFuturo">
                        <img src="<?= $post->image ?>">
                    </span>
                    <span id="titulo2"><?= substr($post->title,0,25) ?></span>
                        <span id="barrinha2"></span>
                        <span id="resumo2"><?= substr($post->content,0,110) ?>...</span>
                        <div id="autor2">Autor: Lex Luthor</div>
                        <button id="lermais2"><a class = "readmore" style = "color: white; text-decoration: none;" href="/visualizacao-unica?id=<?= $post->id ?>">Ler Mais</a></button>
                </span>
                <?php 
                if($kont<5)
                   $kont++;
                else 
                  $kont=1;
            } 
        endforeach;
            ?>
                
                <div class = "caixote">
                <nav class="paginacao" style = "display: flex; justify-content:center; margin-right:0px" aria-label="Page navigation example">
  <ul class="paginacao" style = "list-style-type: none">
    <li class="page-item <?= $pagina_atual <= 1 ? "disabled" : "" ?>" style = "list-style-type: none">
      <a class="page-link" href="?pagina=<?= $pagina_atual - 1 ?>&search=<?php if(array_key_exists('search',$_GET)){ echo $_GET['search']; } ?>" aria-label="Previous">
        <span class = "text-dark" aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <?php for($pagina = 1; $pagina <= $pagina_total; $pagina++): ?>

    <li class="page-item">
      <a class="page-link <?= $pagina == $pagina_atual ? "active" : "" ?>" href="?pagina=<?= $pagina ?>&search=<?php if(array_key_exists('search',$_GET)){ echo $_GET['search']; } ?>">
        <?= $pagina ?>
      </a>
  </li>

    <?php endfor ?>

    <li class="page-item <?= $pagina_atual >= $pagina_total ? "disabled" : "" ?>">
      <a class="page-link" href="?pagina=<?= $pagina_atual + 1 ?>&search=<?php if(array_key_exists('search',$_GET)){ echo $_GET['search']; } ?>" aria-label="Next">
        <span class = "text-dark" aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                </div>
                
             
                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
                  <!-- Footer -->
    <?php
    require_once "footer.html"; 
    ?>
</body>
<style>
        #Pesquisar{
            color:black;
            outline:0;
            background-color:#cc2524;
            border:0;
        }
        #Pesquisar:focus{
            background-color:#cc2524;
        }
        #Pesquisar:active{
            background-color:#cc2524;
        }
        #lupa{
            border:0;
            outline:0;
        }
    </style>
</html>