<?php

namespace App\Controllers;
use App\Core\Router;

    $router->get('posts', 'AdminController@view');
    $router->post('posts/create', 'AdminController@create');
    $router->post('posts/edit', 'AdminController@edit');
    $router->post('posts/delete', 'AdminController@delete');
?>