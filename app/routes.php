<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('login', 'LoginController@login');
    $router->post('login', 'LoginController@logar');
    $router->get('dashboard', 'LoginController@dash');
    $router->get('', 'LoginController@landing');
    $router->get('logout', 'LoginController@logout');
    

?>