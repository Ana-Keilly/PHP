<?php
    $numeroPrimeiro = 9;
    $numeroSegundo = 40.0;
    $nomePessoa = "João";
    echo(" A variável primeiro número recebeu: $numeroPrimeiro");
    echo nl2br ("\n A variavel número segundo recebeu: $numeroSegundo\n");
    echo " A variavel número segundo recebeu:" .number_format($numeroSegundo , 2,".");
    echo nl2br ("\n A variavel nomePessoa recebeu: $nomePessoa")
?>