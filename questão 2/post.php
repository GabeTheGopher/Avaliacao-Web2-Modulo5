<?php
    ini_set('default_charset', 'UTF-8');
if ($_POST) {
        $numero = $_POST["numero"];

        if ($numero > 0) {
            echo "Valor Positivo";
        }else if ($numero < 0) {
            echo "Valor Negativo";
        }else{
            echo "Igual a Zero";
        }
    }
?>