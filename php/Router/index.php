<?php

    $query = require 'core/bootstrap.php';

    require 'core/Router.php';

    $router = new Router;
    
    require 'routes.php';

    require $router->direct('about');

?>