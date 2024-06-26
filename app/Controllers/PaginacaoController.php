<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PaginacaoController
{
    public function view()
    {
        $pagina_atual = 1;
        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
                    $pagina_atual = intval($_GET['pagina']);
                    if ($pagina_atual <= 0){
                        redirect('site/paginacao');
}
        }
        $itens_na_pagina = 5;
        $inicio = $itens_na_pagina * $pagina_atual - $itens_na_pagina;
        $contagem_linhas = App::get('database')->countAll('posts');

        

        if ($inicio > $contagem_linhas){
            redirect('site/paginacao');
        }
    
        $posts = App::get('database')->selectAll('posts', $inicio, $itens_na_pagina);

        $pagina_total = ceil($contagem_linhas/$itens_na_pagina);
        $users = App::get('database')->selectAll('users');

        return view('site/paginacao', compact('posts', 'users', 'contagem_linhas', 'pagina_atual', 'pagina_total'));
    }


    public function viewUsers()
    {
        $pagina_atual = 1;
        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
                    $pagina_atual = intval($_GET['pagina']);
                    if ($pagina_atual <= 0){
                        redirect('site/ListaDeUsuarios_ComModal');
}
        }
        $itens_na_pagina = 5;
        $inicio = $itens_na_pagina * $pagina_atual - $itens_na_pagina;
        $contagem_linhas = App::get('database')->countAll('users');

        

        if ($inicio > $contagem_linhas){
            redirect('site/ListaDeUsuarios_ComModal');
        }
    
        $users = App::get('database')->selectAll('users', $inicio, $itens_na_pagina);

        $pagina_total = ceil($contagem_linhas/$itens_na_pagina);

        return view('site/ListaDeUsuarios_ComModal', compact('users', 'pagina_atual', 'pagina_total'));
    }
    

    public function create()
    {

        $arquivo = $_FILES['image'];
          
          $pasta = "public/imagens/";
          $nomeDoArquivo = $arquivo['name'];
          $novoNomeDoArquivo = uniqid();
          $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
          $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
          move_uploaded_file($arquivo['tmp_name'], $path);
          session_start();
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image'=> $path,
            'author' => $_SESSION['users']['id']
        ];


        App::get('database')->insert('posts', $parameters);
 
        header('Location: /posts');
 
    } 

    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('posts', $id);
        header('Location: /posts');
    }

    public function edit()
    {

        if(!empty($_FILES['image']['tmp_name'])){
            $arquivo = $_FILES['image'];
          
          $pasta = "public/imagens/";
          $nomeDoArquivo = $arquivo['name'];
          $novoNomeDoArquivo = uniqid();
          $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
          $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
          move_uploaded_file($arquivo['tmp_name'], $path);
        }
        else
        {
            $post = App::get('database')->select('posts', $_POST['id']);
            $path = $post[0]->image;
        }


        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image'=> $path
        ];
        App::get('database')->edit('posts', $_POST['id'] ,$parameters);
        header('Location: /posts');
    }

    public function viewUnica()
    {
        $post = App::get('database')->select('posts', $_GET['id']);

        $users = App::get('database')->selectAll('users');

        return view('site/post-indiv', compact('post', 'users'));
    }
    
}

?>