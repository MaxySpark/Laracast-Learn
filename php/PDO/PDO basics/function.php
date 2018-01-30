<?php 
    function dd($data) {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

    function connectToDB() {
        try {
            return new PDO('mysql:host=localhost;dbname=todos','root','123for5ve')    ;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function fetchAllTasks($pdo) {
        $statement = $pdo->prepare('select * from todos');

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }
    
?>