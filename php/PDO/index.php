<?php

    require 'function.php';
    require 'Task.php';
    
    $pdo = connectToDB();

     

    
    $tasks = fetchAllTasks($pdo);

    // var_dump($tasks);

    require 'index.view.php';

?>