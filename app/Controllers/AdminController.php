<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('site/index', compact('posts'));
    }

    public function create()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
        ];

        App::get('database')->insert('posts', $parameters);
        header('Location: /posts');
    }

    public function edit()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
        ];

        $id = $_POST['id'];

        App::get('database')->update('posts', $id, $parameters);
        header('Location: /posts');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);
        header('Location: /posts');
    }
}



?>