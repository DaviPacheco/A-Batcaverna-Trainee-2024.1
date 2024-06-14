<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{
    public function view()
    {
        $pagina_atual = 1;
        if(isset($_GET['paginacaonumero']) && !empty($_GET['paginacaonumero'])){
                    $pagina_atual = intval($_GET['paginacaonumero']);
                    if ($pagina_atual <= 0){
                        redirect('site/index');
}
        }
        $itens_na_pagina = 5;
        $inicio = $itens_na_pagina * $pagina_atual - $itens_na_pagina;
        $contagem_linhas = App::get('database')->countAll('posts');

        $pagina_total = ceil($contagem_linhas/$itens_na_pagina);

        if ($inicio > $contagem_linhas){
            redirect('site/index');
        }
    
        $posts = App::get('database')->selectAll('posts', $inicio, $itens_na_pagina);
        return view('site/index', compact('posts', 'pagina_atual', 'pagina_total'));
    }
    

    public function create()
    {

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'created_at' => $_POST['created_at']

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
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image'=> $_POST['image']
        ];
        App::get('database')->edit('posts', $_POST['id'] ,$parameters);
        header('Location: /posts');
    }

}

?>