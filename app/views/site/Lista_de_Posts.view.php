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
    <link rel="stylesheet" href="/public/css/ModalEdicaoPost.css" />
</head>
<body>
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
                            <img src="/public/assets/batman do futuro.png">
                        </span>
                        <span id="titulo1"><?= $post->title; ?></span>
                        <span id="barrinha1"></span>
                        <span id="resumo1">Texto informativo contando a história de origem da DC Comics, desde os primórdios, e como a empresa se tornou o que é hoje.</span>
                        <div id="autor1">Autor: Lex Luthor</div>
                        <button id="lermais1">Ler Mais</button>
                    </span>   
                  <?php $kont++;
                   } 
                    else{ ?>  
                <span id="post<?= $kont ?>">
                    <span id="bord2"></span>
                    <span id="batmanDoFuturo">
                        <img src="/public/assets/batman do futuro.png">
                    </span>
                    <span id="titulo2"><?= $post->title; ?></span>
                        <span id="barrinha2"></span>
                        <span id="resumo2">Texto informativo contando a história de origem da DC Comics, desde os primórdios, e como a empresa se tornou o que é hoje.</span>
                        <div id="autor2">Autor: Lex Luthor</div>
                        <button id="lermais2">Ler Mais</button>
                </span>
                <?php 
                if($kont<5)
                   $kont++;
                else 
                  $kont=1;
            } 
        endforeach;
            ?>
                
                <nav class="paginacao" style = "display: flex; justify-content: center; margin-top: 20px;" aria-label="Page navigation example">
  <ul class="paginacao" style = "list-style-type: none">
    <li class="page-item <?= $pagina_atual <= 1 ? "disabled" : "" ?>" style = "list-style-type: none">
      <a class="seta_pag1" href="?pagina=<?= $pagina_atual - 1 ?>&search=<?php if(array_key_exists('search',$_GET)){ echo $_GET['search']; } ?>" aria-label="Previous">
        <span class = "text-dark" aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <?php for($pagina = 1; $pagina <= $pagina_total; $pagina++): ?>

    <li class="page-item">
      <a class="page-item <?= $pagina == $pagina_atual ? "active" : "" ?>" href="?pagina=<?= $pagina ?>&search=<?php if(array_key_exists('search',$_GET)){ echo $_GET['search']; } ?>">
        <?= $pagina ?>
      </a>
  </li>

    <?php endfor ?>

    <li class="page-item <?= $pagina_atual >= $pagina_total ? "disabled" : "" ?>">
      <a class="seta_pag2" href="?pagina=<?= $pagina_atual + 1 ?>&search=<?php if(array_key_exists('search',$_GET)){ echo $_GET['search']; } ?>" aria-label="Next">
        <span class = "text-dark" aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                
             
                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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