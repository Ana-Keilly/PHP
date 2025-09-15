<?php
    $PrimeiroNumero = 10;
    echo("O valor da variavel primeiro numero é: $PrimeiroNumero");

    //utilizando operadores de atribuição de forma aninhada
    echo nl2br(" \nO valor da variavel primeiro numero + segundo numero é :".$PrimeiroNumero = ($SegundoNumero = 5) + $PrimeiroNumero."\n");

    //utilizando operador de atribuição de forma combinada
    echo("somando cinco unidades à variavel segundo numero :".$SegundoNumero += 5);

    echo nl2br ("\n O valor do segundo numero é: $SegundoNumero\n");
    echo("O valor da variavel primeiro numero é: $SegundoNumero");

    //utilizando operadores de atribuição de forma referênciada
    echo nl2br ("\nA variavel segundo numero sendo referencia para primeiro numero".
     $SegundoNumero = &$PrimeiroNumero);
     echo nl2br ("\n O valor do segundo numero é: $SegundoNumero\n");

?>