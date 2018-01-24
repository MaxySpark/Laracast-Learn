<?php
    
    require 'functions.php';

    $names = [
        'bhargab',
        'bla',
        'bla bla'
    ];

    $person = [
        'age' => 22,
        'career' => 'Bekar'
    ];

    $person['sex'] = 'male';

    unset($person[age]);
    
    if(canEnter(35)) {
        echo 'You can Enter';
    } else {
        echo 'You Can\'t enter';
    }

    dd($person);
    
    require "index.view.php";
