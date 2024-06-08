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
}



?>