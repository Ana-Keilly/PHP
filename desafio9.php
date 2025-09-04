<?php
    $numero1 = 5;
    $numero2 = 5;
    $numero3 = 10;
    $nome1 = "Renata";
    $nome2 = "renata";
    $nome3 = "Renata";
    echo nl2br ("\nResolva o problema a seguir: Utilize os separadores de comparação que foram até aqui estudados \n\n");
    echo("Primeiro Numero = $numero1");
    echo nl2br("\nSegundo Numero = $numero2\n");
    echo("Tercero numero = $numero3");
    echo nl2br("\nPrimero nome = $nome1\n");
    echo("Segundo nome = $nome2");
    echo nl2br("\nTerceiro nome = $nome3");
    echo nl2br ("\n\n(O primeiro Nome é diferente do Segundo nome) E (O primeiro numero é igual ao Segundo Número) = ");
    var_dump(($nome1 != $nome2) && ($numero1 == $numero2));
    echo nl2br ("\n(O primeiro Numero é igual do Segundo Numero) E (O primeiro Nome é diferente do Segundo Nome) = ");
    var_dump(($nome1 == $nome2) && ($numero1 != $numero2));
    echo nl2br ("\n(O primeiro Numero é maior que o Segundo Numero) E (O primeiro Nome é menor que o Segundo Nome) = ");
    var_dump(($nome1 > $nome2) && ($numero1 < $numero2));
    echo nl2br ("\n(O primeiro Numero é maior ou igual Segundo Numero) E (O primeiro Nome é menor ou igual do Segundo Nome) = ");
    var_dump(($nome1 >= $nome2) && ($numero1 <= $numero2));

    echo nl2br ("\n\n(O primeiro Nome é diferente do Segundo Nome) OU (O primeiro Numero é igual o Segundo Numero) = ");
    var_dump(($nome1 != $nome2) || ($numero1 == $numero2));
    echo nl2br ("\n(O primeiro Numero é igual do Segundo Numero) OU (O primeiro Nome é diferente do Terceiro Nome) = ");
    var_dump(($nome1 == $nome2) || ($numero3 != $numero2));
    echo nl2br ("\n(O primeiro Numero é maior que o Segundo Numero) OU (O primeiro Nome é diferente do Terceiro Nome) = ");
    var_dump(($nome1 < $nome2) || ($numero1 != $numero2));
    echo nl2br ("\n(O Segundo Numero é igual ou maior que o Terceiro Numero) OU (O Terceiro Numero é menor ou igual o Segundo Numero) = ");
    var_dump(($nome1 >= $nome2) || ($numero1 <= $numero2));

    echo nl2br ("\n\n(O primeiro Nome é diferente do Segundo Nome) OU...OU (O primeiro Numero é igual o Segundo Numero) = ");
    var_dump(($nome1 != $nome2) xor ($numero1 == $numero2));
    echo nl2br ("\n(O primeiro Numero é igual do Segundo Numero) OU...OU (O primeiro Nome é diferente do Terceiro Nome) = ");
    var_dump(($nome1 == $nome2) xor ($numero3 != $numero2));
    echo nl2br ("\n(O primeiro Numero é maior que o Segundo Numero) OU...OU (O primeiro Nome é diferente do Terceiro Nome) = ");
    var_dump(($nome1 < $nome2) xor ($numero1 != $numero2));
    echo nl2br ("\n(O Segundo Numero é igual ou maior que o Terceiro Numero) OU...OU (O Terceiro Numero é menor ou igual o Segundo Numero) = ");
    var_dump(($nome1 >= $nome2) xor ($numero1 <= $numero2));

    echo nl2br("\n\nA negação do (O primeiro Nome é diferente do Segundo Nome) E (O primeiro Numero é igual o Segundo Numero) = ");
    var_dump(($nome1 != $nome2) && ($numero1 == $numero2));
    echo nl2br("\nA negação do (O Primeiro Numero é igual o Segundo Numero) E (O Primeiro Nome é diferente do Terceiro Nome) = ");
    var_dump(($nome1 != $nome2) && ($numero1 == $numero2));
    





?>