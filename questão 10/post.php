<?php

    if($_POST){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];

        
        if($operacao == 'adicao'){
            echo "$num1 + $num2 = ".($num1+$num2);
        }else if($operacao == 'subtracao'){
            echo "$num1 - $num2 = ".($num1-$num2);
        }else if($operacao == 'multiplicacao'){
            echo "$num1 x $num2 = ".($num1*$num2);
        }else{
            echo "$num1 / $num2 = ".($num1/$num2);
        }

    }
?>