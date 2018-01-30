<?php 
    function dd($data) {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

    function canEnter($val) {
        if($val < 21) {
            return false;
        } else {
            return true;
        }
    }
    
?>