<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Controllers\PaginacaoController;
use App\Core\Router;

    $router->get('login', 'LoginController@login');
    $router->post('login', 'LoginController@logar');
    $router->get('dashboard', 'LoginController@dash');
    $router->get('', 'LoginController@landing');
    $router->get('logout', 'LoginController@logout');
    $router->get('posts', 'PaginacaoController@view');
    $router->post('posts/create', 'PaginacaoController@create');
    $router->post('posts/edit', 'PaginacaoController@edit');
    $router->post('posts/delete', 'PaginacaoController@delete');
    $router->get('visualizacao-unica', 'PaginacaoController@viewUnica');

?>