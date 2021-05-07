<?php
ini_set('default_charset', 'UTF-8');

    if($_POST){

        $var = $_POST['var'];
        $varlength = strlen($var);


        for($i = 1; $i <= $varlength; $i++){
            $resul .= $var." ";
            echo $resul." <br>";
        }
    }
?>