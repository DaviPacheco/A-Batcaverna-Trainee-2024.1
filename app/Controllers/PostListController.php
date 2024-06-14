<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostListController
{

    public function index()
    {
        if(!array_key_exists('search',$_GET) || $_GET['search']===false || $_GET['search']===null || $_GET['search']===""){
           $posts = App::get('database')->selectAll('users');
        }   
        else{
        $title=$_GET['search'];
        $param=['title'=>$title];
        $posts = App::get('database')->SelectAllSearch('posts',$param);
        // Obtém Banco de Dados e seleciona tudo
        }
        return view('site/Lista_De_Posts',compact('posts')); //Compact Transforma em array
        
    }
    public function search(){
        
    }
}

?>