<?php

$date = date('d/m/Y');

?>

<?php date_default_timezone_set('America/Sao_Paulo') ?>

<html lang="pt">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
      rel="stylesheet"
    />

    <script
      defer
      src="https://kit.fontawesome.com/10f37f7ffb.js"
      crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina de Publicações_Admin</title>
    <link rel="stylesheet" href="/public/css/ModalEdicaoPost.css" />
    <!-- links da sidebar -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div id="telaBloqueadora"></div>
    <div id="BlocoDaListaDePosts">
      <div class="back">
        <div class="cont_user">
          <p class="title_user">Lista de Posts</p>
          <button
            class="bt_create"
            onclick="abrirModal('DivFormularioCriacaoDePost',1)"
          >
            Criar Post
          </button>
        </div>
        <div class="cont_tab">
          <table>
            <thead>
              <tr class="header_tab">
                <th class="header_id">ID</th>
                <th>Usuário</th>
                <th>Post</th>
                <th class="header_ac">Ação</th>
              </tr>
            </thead>

          


            <tbody>

              <?php foreach($posts as $post): ?>

              <tr class="body_tab">
                <td><?= $post->id ?></td>
                <td>Wayne</td>
                <td><?= $post->title ?></td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost<?php echo $post->id ?? '1' ?>',1)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost<?php echo $post->id ?? '1' ?>',1)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm<?php echo $post->id ?? '1' ?>',1)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>

              


      <?php endforeach; ?>
              


      
            </tbody>
          </table>
          
              <!-- ----------------------------PAGINACAO-------------------------------------------- -->
          <nav class="paginacao" style = "display: flex; justify-content: center; margin-top: 20px;" aria-label="Page navigation example">
  <ul class="paginacao" style = "list-style-type: none">
    <li class="page-item <?= $pagina_atual <= 1 ? "disabled" : "" ?>" style = "list-style-type: none">
      <a class="page-link" href="?pagina=<?= $pagina_atual - 1 ?>" aria-label="Previous">
        <span class = "text-dark" aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <?php for($pagina = 1; $pagina <= $pagina_total; $pagina++): ?>

    <li class="page-item">
      <a class="page-link <?= $pagina == $pagina_atual ? "active" : "" ?>" href="?pagina=<?= $pagina ?>">
        <?= $pagina ?>
      </a>
  </li>

    <?php endfor ?>

    <li class="page-item <?= $pagina_atual >= $pagina_total ? "disabled" : "" ?>">
      <a class="page-link" href="?pagina=<?= $pagina_atual + 1 ?>" aria-label="Next">
        <span class = "text-dark" aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
          
    <!-- ----------------------------------------FIM DA PAGINACAO ---------------------------------------- -->

        </div>
      </div>
    </div>


<!-- Modal Criar -->

<div class="BlocoPost" id="DivFormularioCriacaoDePost">
      <form class="formA" id="FormularioCriacaoDePost" method="POST" action="/posts/create" enctype = "multipart/form-data">
      <input type="hidden" value="<?= $post->id ?? '1' ?>" name="id" required/>
        <h2>CRIAR POST</h2>
        <section class="TituloPostForm">
          <h3>Título:</h3>
          <input type="text" name="title" placeholder="Digite o título do post aqui" />
        </section>
        <section class="ConteudoPostForm">
          <h3>Conteúdo:</h3>

          <textarea
            rows="7"
            placeholder="Digite o conteúdo do post aqui"
            name="content"
            required
          ></textarea>
        </section>
        <section class="ImagemDoPostForm">
          <h3>Imagem:</h3>
          <label class="LabelBotaoDeArquivo"
            ><span>Escolher imagem do post: <br /></span>
          </label>
          <input
            type="file"
            id="EscolhaImagem1"
            accept="image/png, image/jpeg"
            multiple
            name="image"
            required
          />
        </section>
        <section class="DataDeCriacaoPostForm">
          <h3>Data de criação:</h3>
          <input type="text" value="<?= date('d/m/Y'); ?>" name="created_at" placeholder="<?php echo"<pre>"; print_r($date); echo"</pre>" ?>" readonly/>
        </section>
        <section class="NomeDoAutorPostForm">
          <h3>Autor:</h3>
          <p>be</p>
        </section>
        <div class="BotoesFormularios">
          <button
            type = "submit"
            class="Botao1Formulario"
          >
            CRIAR
          </button>
          <button
            type = "button"
            class="Botao2Formulario"
            onclick="fecharModal('DivFormularioCriacaoDePost')"
          >
            CANCELAR
          </button>
        </div>
      </form>
      </div>


<?php foreach($posts as $post): ?>

              <!-- Modal Visulizar -->

              <div class="BlocoPost" id="DivFormularioVisualizacaoDePost<?php echo $post->id ?? '1' ?>">
        <div class="formA" id="FormularioVisualizacaoDePost" >
        <input type="hidden" value="<?= $post->id ?? '1' ?>" name="id"/>
          <h2>VISUALIZAR POST</h2>
          <section class="IDpostForm">
            <h3>ID:</h3>
            <p><?= $post->id ?></p>
          </section>
          <section class="TituloPostForm">
            <h3>Título:</h3>
            <p><?= $post->title ?></p>
          </section>
          <section class="ConteudoPostForm">
            <h3>Conteúdo:</h3>
            <textarea class="ConteudoVisualizacao" readonly rows=4 ><?= $post->content ?></textarea>
          </section>
          <section class="ImagemDoPostFormV">
            <h3>Imagem:</h3>
            <img
              src="<?= $post->image ?>"
            />
          </section>
          <section class="DataDeCriacaoPostForm">
            <h3>Data de criação:</h3>
            <p><?= $post->created_at ?></p>
          </section>
          <section class="NomeDoAutorPostForm">
            <h3>Autor:</h3>
            <p><?= $post->author?></p>
          </section>
          <div class="BotoesFormularios">
            <button
              class="Botao1Formulario" type = "button"
              onclick="fecharModal('DivFormularioVisualizacaoDePost<?= $post->id ?? '1' ?>')"
            >
              FECHAR
            </button>
          </div>
            </div>
      </div>

<!-- Modal Excluir -->

      <div class="BlocoPost" id="DivConfirmacaoExclusaoPostForm<?php echo $post->id ?? '1' ?>">
        <form class="formA" id="ConfirmacaoExclusaoPostForm" method="POST" action="/posts/delete">
        <input type="hidden" value="<?= $post->id ?? '1' ?>" name="id"/>
          <h2>EXCLUIR POST</h2>
          <p>
            ATENÇÃO! <?php $post->id ?? '1' ?> Após a conclusão dessa ação, não será possível
            desfazê-la.<br />Tem certeza que deseja excluir esse post
            PERMANENTEMENTE?
          </p>
          <div class="BotoesFormularios">
            <button type = "submit"
              class="Botao1Formulario"
              onclick="fecharModal('DivConfirmacaoExclusaoPostForm<?= $post->id ?? '1' ?>')"
            >
              EXCLUIR
            </button>
            <button type = "button"
              class="Botao2Formulario"
              onclick="fecharModal('DivConfirmacaoExclusaoPostForm<?= $post->id ?? '1' ?>')"
            >
              CANCELAR
            </button>
          </div>
        </form>
      </div>


<!-- Modal Editar -->

      <div class="BlocoPost" id="DivFormularioEdicaoDePost<?php echo $post->id ?? '1' ?>">
      <form class="formA" id="FormularioEdicaoDePost" method="POST" action="/posts/edit" enctype = "multipart/form-data">
        <input type="hidden" value="<?= $post->id ?? '1' ?>" name="id"/>
        <h2>EDITAR POST</h2>
        <section class="TituloPostForm">
          <h3>Título:</h3>
          <input type="text" name="title" value = "<?= $post->title ?>" required/>
        </section>
        <section class="ConteudoPostForm">
          <h3>Conteúdo:</h3>
          <textarea rows="7"
          name="content" required><?= $post->content ?>
        </textarea>
        </section>
        <section class="ImagemDoPostForm">
          <h3>Imagem:</h3>
          <label class="LabelBotaoDeArquivo" for="EscolhaImagem2" tabindex="0">
            <span>Editar imagem do post: <br /></span>
          </label>
          <input type="file" id="EscolhaImagem2" name="image" />
        </section>
        <section class="DataDeCriacaoPostForm">
          <h3>Data de criação:</h3>
          <p><?= $post->created_at ?></p>
        </section>
        <section class="NomeDoAutorPostForm">
          <h3>Autor:</h3>
          <p><?= $post->author ?></p>
        </section>
        <div class="BotoesFormularios">
          <button type = "submit"
            class="Botao1Formulario" id = "boTao"
            onclick="fecharModal('DivFormularioEdicaoDePost<?= $post->id ?? '1' ?>')"
          >
            SALVAR
          </button>
          <button type = "button"
            class="Botao2Formulario"
            onclick="fecharModal('DivFormularioEdicaoDePost<?= $post->id ?? '1' ?>')"
          >
            CANCELAR
          </button>
        </div>
      </form>
      </div>

      <?php endforeach; ?>

  </body>
  <script src="/public/js/paginacaoA.js"></script>
  <script src="/public/js/funcoesModal.js"></script>
</html>