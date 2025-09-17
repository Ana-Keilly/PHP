<?php
    $nota1 = $_GET['nota'];
    $nota2 = $_GET['nota'];
    $nota3 = $_GET['nota'];
    $nota4 = $_GET['nota'];
    $nomepessoa = $_GET['nomepessoa'];
    $faltas = $_GET['faltas'];
    $media = ($nota1 + $nota2 + $nota3 + $nota4/ 2);
    if(($media >= 5)){
        echo(" Aluno aprovado");
    }else{
        echo("Aluno reprovado");
    }

?>