<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista_usuario</title>
    <link rel="stylesheet" href="../../../public/css/Modal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/ModalEdicaoPost.css" />
    <script defer src="https://kit.fontawesome.com/10f37f7ffb.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="back">
    <div class="cont_user">
        <p class="title_user">Lista de Usuários</p>
        <button class="bt_create" onclick="abrirmodal('divform')">Criar Usuário</button>
    </div>
    <div class="cont_tab"> 

        

        <table>
            <thead>
                <tr class ="header_tab">
                      <th class="header_id">ID</th>
                        <th>Usuário</th>
                        <th>Email</th>
                    <th class ="header_ac">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php
        foreach($users as $user): ?>
                <tr class ="body_tab">
                    <td><?=$user->id ?? '1'?></td>
                    <td><?=$user->name?></td>
                    <td><?=$user->email?></td>
                    <td><button class="bt_vis" onclick="abrirmodal('divvs<?=$user->id ?? '1'?>')" ><i class="fa-regular fa-eye"></i><span class="stx">Visualizar</span></button>
                        <button class="bt_edit"onclick="abrirmodal('eddivform<?=$user->id ?? '1'?>')" ><i class="fa-regular fa-pen-to-square"></i><span class="stx">Editar</span></button>
                        <button class="bt_delete" onclick="abrirmodal('divdelete<?=$user->id ?? '1'?>')" ><i class="fa-regular fa-trash-can"></i><span class="stx">Excluir</span></button>
                    </td>
                </tr>
                
<?php endforeach; ?> 
            </tbody>
        </table>
        
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

<!--////////////////// MODAL ////////////////-->

<!-- CRIAR USUARIO -->
<div class="cont_modal" id="divform">
    <form class="divform" method="POST" action="users/create">
        <div class="nv"><h2 class="nc">CRIAR USUARIO</h2></div>
        <div class="formad" >
            <label class="tt">Nome:</label>
            <input class="in" type="username" placeholder="  nome do usuario" name="name" required>
            <label class="tt">Email:</label>
            <input class="in" type="email"placeholder="  email" name="email" required>
            <label class="tt">Senha:</label>
            <input class="in" type="password"placeholder="  digite sua senha" name="password" required>
        </div>
        <div class="af">       
            <button type="submit"  class="f">SALVAR</button>
            <button class="fe" type="button" onclick="fecharmodal('divform')">CANCELAR</button>
        </div>
    </form>
</div>

<!-- EDITAR -->
<?php foreach( $users as $user): ?>
    <div class="cont_modal" id="eddivform<?=$user->id ?? '1'?>" >
        <form class="eddivform"   method="POST" action="users/edit">
            <div class="ednv"><h2 class="ednc">EDITAR USUARIO</h2></div>
            <div class="formed">
                <input type="hidden" value="<?=$user->id ?? '1'?>" name="id" >
                <label class="edtt">Nome:</label>
                <input class="edin" type="name" placeholder="  usuario" value="<?=$user->name?>" name="name" required>
                <label class="edtt">Email:</label>
                <input class="edin" type="email" placeholder=" usuario.@email" value="<?=$user->email?>" name="email" required>
                <label class="edtt">Senha:</label>
                <input class="edin" type="password" placeholder="  editar senha" value="<?=$user->password?>" name="password" required>
            </div>
            <div class="edaf">       
            <button type="submit" class="edf" >SALVAR</button>
            <button type="button" class="edfe" onclick="fecharmodal('eddivform<?=$user->id ?? '1'?>')">CANCELAR</button>
        </div>
    </form>   
        </div>
    <!-- VISUALIZAR -->
    <div class="cont_modal" id="divvs<?=$user->id ?? '1'?>">
        <div class="divvs">
            <div class="divti">
                <h2 class="h2vs">VISUALIZAR USUÁRIO</h2>
            </div>
            <div class="cabeca_conteudo">
                <div class="vsidu">
                    <p class="idu"> ID:</p>
                <p class="idu2"> <?=$user->id ?? '1'?></p>
                
            </div>
            <div class="divvn">
                <p class="pvs"> Nome:</p> 
                <p class="ppu"><?=$user->name ?></p>
            </div>
            
            <div class="divve">
                <p class="pvs">Email:</p>
                <p class="ppu2"><?=$user->email ?></p>
            </div>
        </div>
            <div class="cabeca_butao">
                <button type="button" class="butvs" onclick="fecharmodal('divvs<?=$user->id ?? '1'?>')" >FECHAR</button>
            </div>
        </div>
    </div>
</div>
<!-- EXCLUIR -->
<div class="cont_modal" id="divdelete<?=$user->id ?? '1'?>">
    <form class="divdelete" method="POST" action="users/delete">
            <div class="texti">
                <h2 class="exu">EXCLUIR USUÁRIO</h2>
            </div>
            <div class="divaviso">
                <p class="deletext">
                    Atenção, após essa ação for concluida, não será possivel desfazê-la!<br/>
                    Tem certeza que deseja excluir esse Usuário?
                </p>
            </div>
            <div class="bbpos"> 
              <input type="hidden" value="<?=$user->id ?? '1'?>" name="id" >           
             <button class="butcan" >EXCLUIR</button>
             <button class="butex" type="button" onclick="fecharmodal('divdelete<?=$user->id ?? '1'?>')">CANCELAR</button>
           </div>
            </div>
        </form>
    </div>
    <?php endforeach; ?>
</body>
<script defer src="../../../public/js/Paginacao.js"></script>
<script src="../../../public/js/Modal_Luis.js"></script>
</html>