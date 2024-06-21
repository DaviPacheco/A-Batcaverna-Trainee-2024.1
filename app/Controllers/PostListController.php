<?php  
namespace App\Controllers;  
use App\Core\App; 
use Exception;  
class PostListController {      
    public function index()     
    { if(!array_key_exists('search',$_GET) || $_GET['search']===false || $_GET['search']===null || $_GET['search']==="")
    {    $posts = App::get('database')->selectAll('posts');       
  }           
   else{        
     $title=$_GET['search'];         
     $param=['title'=>$title];        
      $posts = App::get('database')->SelectAllSearch('posts',$param);         // Obtém Banco de Dados e seleciona tudo       
  }   



  $pagina_atual = 1;
  if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
              $pagina_atual = intval($_GET['pagina']);
              if ($pagina_atual <= 0){
                  redirect('site/Lista_de_Posts');
}
  }
  $itens_na_pagina = 5;
  $inicio = $itens_na_pagina * $pagina_atual - $itens_na_pagina;
  $contagem_linhas = App::get('database')->countAll('posts');

  

  if ($inicio > $contagem_linhas){
      redirect('site/Lista_de_Posts');
  }

  if(!array_key_exists('search',$_GET) || $_GET['search']===false || $_GET['search']===null || $_GET['search']==="")
  {    $posts = App::get('database')->selectAll('posts', $inicio, $itens_na_pagina);       
}           
 else{        
   $title=$_GET['search'];         
   $param=['title'=>$title];        
   $posts = App::get('database')->selectAllSearch('posts', $param, $inicio, $itens_na_pagina);      // Obtém Banco de Dados e seleciona tudo       
}  

  $pagina_total = ceil($contagem_linhas/$itens_na_pagina);

  return view('site/Lista_de_Posts', compact('posts', 'pagina_atual', 'pagina_total'));            
     }    
     }  
     ?>