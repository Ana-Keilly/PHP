<?php
    $numero1 = 10;
    $numero2 = 10;
    $numero3 = 15;
    $nome1 = "Ricardo";
    $nome2 = "ricardo";
    $nome3 = "Ricardo";
    echo("Resolva o problema a seguir: Utilize os operadores de comparação que foram até aqui estudados");
    echo nl2br("\n\n Primeiro Numero = $numero1\n");
    echo("Segundo Numero = $numero2");
    echo nl2br("\nTerceiro Numero = $numero3\n");
    echo("Primeiro nome = $nome1");
    echo nl2br("\nSegundo nome = $nome2\n");
    echo("Terceiro nome = $nome3");

    echo nl2br("\n\n O primeiro nome é diferente do segundo nome :");
    var_dump( ($nome1 != $nome2));
    echo nl2br("\n O primeiro nome é diferente do terceiro nome :");
    var_dump( ($nome1 != $nome3));
    echo nl2br("\n O primeiro nome é igual do segundo nome :");
    var_dump( ($nome1 === $nome2));
    echo nl2br("\n O primeiro nome é igual do terceiro nome :");
    var_dump( ($nome1 === $nome3));

    echo nl2br("\n\n O primeiro numero é diferente do segundo numero :");
    var_dump( ($numero1 != $numero2));
    echo nl2br("\n O primeiro numero é diferente do terceiro numero :");
    var_dump( ($numero1 != $numero3));
    echo nl2br("\n O primeiro numero é igual do segundo numero :");
    var_dump( ($numero1 == $numero2));
    echo nl2br("\n O primeiro numero é igual do terceiro numero :");
    var_dump( ($numero1 == $numero3));

    echo nl2br("\n\n O primeiro numero é identico do segundo numero :");
    var_dump( ($numero1 === $numero2));
    echo nl2br("\n O primeiro numero é identico do terceiro numero :");
    var_dump( ($numero1 === $numero3));
    echo nl2br("\n O primeiro numero não é identico do segundo numero :");
    var_dump( ($numero1 !== $numero2));
    echo nl2br("\n O primeiro numero não é identico do terceiro numero :");
    var_dump( ($numero1 !== $numero3));

    echo nl2br("\n\n O primeiro numero é maior que o segundo numero :");
    var_dump( ($numero1 > $numero2));
    echo nl2br("\n O primeiro numero é maior que o terceiro numero :");
    var_dump( ($numero1 > $numero3));
    echo nl2br("\n O primeiro numero é menor que o segundo numero :");
    var_dump( ($numero1 < $numero2));
    echo nl2br("\n O primeiro numero é menor que o terceiro numero :");
    var_dump( ($numero1 < $numero3));

    echo nl2br("\n\n O primeiro numero é maior ou igual que o segundo numero :");
    var_dump( ($numero1 >= $numero2));
    echo nl2br("\n O primeiro numero é maior ou igual que o terceiro numero :");
    var_dump( ($numero1 >= $numero3));
    echo nl2br("\n O primeiro numero é menor ou igual que o segundo numero :");
    var_dump( ($numero1 <= $numero2));
    echo nl2br("\n O primeiro numero é menorou igual que o terceiro numero :");
    var_dump( ($numero1 <= $numero3));
    
?>