<?php
    ini_set('default_charset', 'UTF-8');

    if($_POST){

        $var = $_POST['var'];
        $total_carcter = strlen($var);

        echo $var.'<br>';
        echo $total_carcter.'<br><br>';
    }

    for($i = 1; $i <= $total_carcter; $i++){
        echo $i.' ';
    }
?>