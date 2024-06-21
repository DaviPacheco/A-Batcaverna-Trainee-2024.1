<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/css/visualizacao-post-indiv.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="logo">
        <img src="../../../public/assets/Logo_Batcaverna_Preto_1 1 (2).png" alt="logo da batcaverna">
    </div>
    <div id="conteiner"> <!-- caixa principal -->
        
          <ul class="lista">
           <li> 
            <img src="<?= $post[0]->image ?> "alt="perfil do post">
           </li>
           <li class = "pedro_bial">
         <div id="titulo"><?= $post[0]->title ?></div>
        </li>
    </ul>
    
         <span id="conteudo">
            <?= $post[0]->content?>
         </span>
         <ul class="infos">
         <li>
            <div id="autor">Autor: Lex Luthor</div>
        </li>
        <li>
        <div id="data">Data de criação: <?= $post[0]->created_at ?></div>
        </li>
        </ul>
    </div>
</body>
</html>