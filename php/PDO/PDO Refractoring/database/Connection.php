<?php


    class Connection {
        public static function make() {
            try {
                return new PDO('mysql:host=localhost;dbname=todos','root','123for5ve')    ;
            } catch (PDOException $e) {
                die($e->getMesasge());
            }
        }
    }
?>