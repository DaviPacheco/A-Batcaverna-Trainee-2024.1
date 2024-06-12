<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{
    public function view()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('site/index', compact('posts'));
    }


    public function create()
    {

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image'=> $_POST['image'],
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