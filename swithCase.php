<?php
    $numero = $_GET['numero'];
    switch ($numero){
        case 0 : echo("Escolheu dígito Zero");break;
        case 1 : echo("Escolheu dígito Um");break;
        case 2 : echo("Escolheu dígito Dois");break;
        case 3 : echo("Escolheu dígito Três");break;
        case 4 : echo("Escolheu dígito Quatro");break;
        case 5 : echo("Escolheu dígito Cinco");break;
        default : echo("Não foi escolhido dígito algum");
    }
    //var_dump($_GET);
    //variável global
?>