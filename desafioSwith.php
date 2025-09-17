<?php
    $dia = $_GET['dia'];
    switch ($dia){
        case 1 : echo("Dia 1: Hoje é Domingo");break;
        case 2 : echo("Dia 3: Hoje é Segunda");break;
        case 3 : echo("Dia 4: Hoje é Terça");break;
        case 4 : echo("Dia 5: Hoje é Quarta");break;
        case 5 : echo("Dia 6: Hoje é Quinta");break;
        case 6 : echo("Dia 7: Hoje é Sexta");break;
        case 7 : echo("Dia 1: Hoje é Sábado");break;
        default : echo("Não é um dia válido");
    }
?>