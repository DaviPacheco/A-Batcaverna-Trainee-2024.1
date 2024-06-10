<?php

$mysql = new mysqli('localhost', 'root','', 'a_batcaverna');
$mysql->set_charset('utf8');
if($mysql==true)
{
  echo 'banco conectado';
}

?>

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
  </head>
  <body>
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
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',1)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',1)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',1)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>

              
              
            </tbody>
          </table>
          

          
          


        </div>
      </div>
    </div>

<!-- Modal Visulizar -->

      <div class="BlocoPost" id="DivFormularioVisualizacaoDePost">
        <form class="formA" id="FormularioVisualizacaoDePost">
        <input type="hidden" value="<?php $post->id ?>" name="id"/>
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
            <p>
              <?= $post->content ?>
            </p>
          </section>
          <section class="ImagemDoPostFormV">
            <h3>Imagem:</h3>
            <img
              src="/public/assets/BatmanPorvisórioPost.jpg"
              alt="Imagem do Batman do Futuro, com fundo de lua cheia em céu roxo"
            />
          </section>
          <section class="DataDeCriacaoPostForm">
            <h3>Data de criação:</h3>
            <p><?=$post->created_at?></p>
          </section>
          <section class="NomeDoAutorPostForm">
            <h3>Autor:</h3>
            <p><?= $post->author?></p>
          </section>
          <div class="BotoesFormularios">
            <button
              class="Botao1Formulario"
              onclick="fecharModal('DivFormularioVisualizacaoDePost')"
            >
              FECHAR
            </button>
          </div>
        </form>
      </div>

<!-- Modal Excluir -->

      <div class="BlocoPost" id="DivConfirmacaoExclusaoPostForm">
        <form class="formA" id="ConfirmacaoExclusaoPostForm" method="POST" action="/posts/delete">
        <input type="hidden" value="<?php $post->id ?>" name="id"/>
          <h2>EXCLUIR POST</h2>
          <p>
            ATENÇÃO! Após a conclusão dessa ação, não será possível
            desfazê-la.<br />Tem certeza que deseja excluir esse post
            PERMANENTEMENTE?
          </p>
          <div class="BotoesFormularios">
            <button
              class="Botao1Formulario"
              onclick="fecharModal('DivConfirmacaoExclusaoPostForm')"
            >
              EXCLUIR
            </button>
            <button
              class="Botao2Formulario"
              onclick="fecharModal('DivConfirmacaoExclusaoPostForm')"
            >
              CANCELAR
            </button>
          </div>
        </form>
      </div>

<!-- Modal Criar -->
             
<div class="BlocoPost" id="DivFormularioCriacaoDePost">
      <form class="formA" id="FormularioCriacaoDePost" method="POST" action="/posts/create">
      <input type="hidden" value="<?php $post->id ?>" name="id"/>
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
          />
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
          <button
            class="Botao1Formulario"
            onclick="fecharModal('DivFormularioCriacaoDePost')"
          >
            CRIAR
          </button>
          <button
            class="Botao2Formulario"
            onclick="fecharModal('DivFormularioCriacaoDePost')"
          >
            CANCELAR
          </button>
        </div>
      </form>
      </div>

<!-- Modal Editar -->

      <div class="BlocoPost" id="DivFormularioEdicaoDePost">
      <form class="formA" id="FormularioEdicaoDePost" method="POST" action="/posts/edit">
        <input type="hidden" value="<?php $post->id ?>" name="id"/>
        <h2>EDITAR POST</h2>
        <section class="TituloPostForm">
          <h3>Título:</h3>
          <input type="text" name="title" />
        </section>
        <section class="ConteudoPostForm">
          <h3>Conteúdo:</h3>
          <textarea rows="7"
          name="content"></textarea>
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
          <button
            class="Botao1Formulario"
            onclick="fecharModal('DivFormularioEdicaoDePost')"
          >
            SALVAR
          </button>
          <button
            class="Botao2Formulario"
            onclick="fecharModal('DivFormularioEdicaoDePost')"
          >
            CANCELAR
          </button>
        </div>
      </form>
      </div>

      <?php endforeach; ?>

      <div class="paginacao">
            <button onclick="troca_relativa(-1)" class="seta_pag1">
              <i class="fa-solid fa-angles-left"></i>
            </button>
            <a href="#1" class="num_pag">1</a>
            <a href="#2" class="num_pag">2</a>
            <button onclick="troca_relativa(+1)" class="seta_pag2">
              <i class="fa-solid fa-angles-right"></i>
            </button>
          </div>

  </body>
  <script src="/public/js/paginacaoA.js"></script>
  <script src="/public/js/funcoesModal.js"></script>
</html>