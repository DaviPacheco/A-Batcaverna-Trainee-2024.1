<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');
    $router->get('users', 'UserAdminController@index');
    //users é a URI, UserAdminController o controller
    // index é metodo.
    $router->post('users/create', 'UserAdminController@create');
    $router->post('users/edit', 'UserAdminController@edit');

?>