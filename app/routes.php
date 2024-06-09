<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('posts', 'AdminController@index');
    $router->post('posts/create', 'AdminController@create');
    $router->post('posts/edit', 'AdminController@edit');
    $router->post('posts/delete', 'AdminController@delete');
?>