<?php
include_once 'Calculadora.php';
    $calcular = new calculadora(10 , 20);
    $calcular->somaNumeros();
    $calcular->subtracao();
    $calcular->multiplicacao();
    $calcular->divisao();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link >
    <title>Calculadora</title>
</head>
<body>
    <h3>Calculadora</h3>
    <form>
        <input type="number" name="numero01" placeholder="Digite o 1º Número"/>
        <br> <br>
        <input type="number" name="numero02" placeholder="Digite o 2º Número"/>
        <br> <br>
        <input type="submit" value="+" name=""/>
        <input type="submit" value="-" name=""/>
        <input type="submit" value="*" name=""/>
        <input type="submit" value="/" name=""/>
        
    </form>
</body>
</html>