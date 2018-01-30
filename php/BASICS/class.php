<?php

    require 'functions.php';

    class Task {
        public $description;

        public $completed = false;

        public function __construct($description)
        {
            $this->description = $description;
        }

        public function isCompleted() {
            return $this->completed;
        }

        public function complete() {
            $this->completed = true;
        }

    }


    $tasks = [
        new Task('Go to the store'),
        new Task('Go to sleep'),
        new Task('finish the bla')
    ];  
    
    $tasks[0]->complete();

    require 'class.view.php';

    // dd($tasks);

?>