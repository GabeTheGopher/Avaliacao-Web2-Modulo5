<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
   <form action="post.php" method="post">

    Digite os valores a serem operados:<br>

    <input type="text" name="num1" placeholder="Valor">
    <input type="text" name="num2" placeholder="Valor"><br>

    <input type="radio" name="operacao" value="adicao" checked>Adicao
    <input type="radio" name="operacao" value="subtracao">Subtração
    <input type="radio" name="operacao" value="multiplicacao">Multiplicação
    <input type="radio" name="operacao" value="divisao">Divisão<br>

    <input type="submit" value="Iniciar">
    
   </form> 
</body>
</html>