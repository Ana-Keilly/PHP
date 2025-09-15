<?php
    $numero1 = 80;
    $numero2 = 100;
    $numero3 = 65.15;
    $nome1 = "Ana Paula";
    $nome2 = "Ana Luiza Moura";
    $nome3 = "Mario Carlos";
    
    echo nl2br ("\nDesenvolva a atividade a seguir: os seis dados(valores) logo abaixo são variaveis, portanto valores dinamicos \n\n");
    echo("Primeiro Nome = $nome1");
    echo nl2br("\nSegundo Nome = $nome2\n");
    echo("Tercero Nome = $nome3");
    echo nl2br("\n\nPrimero Numero = $numero1\n");
    echo("Segundo Numero = $numero2");
    echo nl2br("\nTerceiro Numero = $numero3\n\n");

    echo nl2br("O valor da variavel Primeiro Nome é:$nome1\n");
    echo("O valor da variavel Terceiro Nome é:$nome3");
    echo nl2br("\n$nome1 e $nome3 são casados e possuem uma filha: $nome2\n");
    echo("$nome2 é estudante e ganha uma bolsa de:$numero3 por mes equivalente à:". $numero2 * 12 );
    echo(" Anual");
    echo nl2br("\n o nome Ana Luiza Moura possui 15 caracteres  ultimo sobrenome é: Moura\n");
    echo("Incrementando uma unidade(Pós incremento) à variavel Primeiro numero : ".$numero1++);
    echo nl2br("\nNovo valor da variavel Primeiro Numero é:$numero1");
    echo nl2br("\nA raiz quadrada da variavel Primeiro numero é:".sqrt($numero1));
    echo nl2br("\nO valor $numero1 == Valor $numero2 :");
    var_dump(($nome1 == $nome2));
    echo nl2br("\nO valor $numero2 <= Valor $numero1 :");
    var_dump(($nome2 <= $nome1));
    echo nl2br("\n$numero1 >= $numero2 xor $numero1 != $numero2 :");
    var_dump(($numero2 != $numero1)xor($numero1 != $numero2));
    echo nl2br("\n $numero2 == $numero1  and $numero1 != $numero2:");
    var_dump(($numero2 == $numero1)and($numero1 != $numero2));
    




?>