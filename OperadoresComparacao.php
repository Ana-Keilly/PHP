<?php
    $verdadeiro = true;
    $falso = false;
    //echo("O valor da variavel Verdadeiro é: $verdadeiro ");
    //echo nl2br("\n O valor da variavel falso é: $falso ");

    echo nl2br("\n");
    echo("O valor da variavel Verdadeiro é:");
    var_dump( $verdadeiro );
    echo nl2br("\n");
    echo("O valor da variavel falso é:");
    var_dump( $falso );
    echo nl2br("\n\n");
    $nome1 = "Paulo";
    $nome2 = "paulo";
    $nome3 = "Paulo";
    $numero1 = 10;
    $numero2 =5;
    $numero3 = "10";
    $numero4 = 5;
    //trabalhando operadores de comparacao igual
    echo("$nome1 == $nome2 : ");
    var_dump( ($nome1 == $nome2));
    echo nl2br("\n$nome1 == $nome3 : ");
    var_dump( ($nome1 == $nome3));
     //trabalhando operadores de comparacao diferente
     echo nl2br("\n$nome1 != $nome2 : ");
     var_dump( ($nome1 != $nome2));
     echo nl2br("\n$nome1 != $nome3 : ");
     var_dump( ($nome1 != $nome3));
     //trabalhando operadores de comparacao menor que
     echo nl2br("\n$numero1 < $numero2 : ");
     var_dump( ($numero1 < $numero2));
     echo nl2br("\n$numero2 < $numero3 : ");
     var_dump( ($numero2 < $numero3));   
     //trabalhando operadores de comparacao maior ou igual
     echo nl2br("\n$numero1 >= $numero2 : ");
     var_dump( ($numero1 >= $numero2));
     echo nl2br("\n$numero2 >= $numero4 : ");
     var_dump( ($numero2 >= $numero4));
     //trabalhando operadores de comparacao identico e nao identico
     echo nl2br("\n$numero1 === $numero3 : ");
     var_dump( ($numero1 === $numero3));
     echo nl2br("\n$numero2 !== $numero4 : ");
     var_dump( ($numero2 !== $numero4));   
?>