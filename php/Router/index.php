<?php

    $query = require 'core/bootstrap.php';

    require 'core/Router.php';

    $router = new Router;
    
    require 'routes.php';
    
    $uri = trim($_SERVER['REQUEST_URI'],'/');

    require $router->direct($uri);
    // var_dump($_SERVER['REQUEST_URI']); 

?>