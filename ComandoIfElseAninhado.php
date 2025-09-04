<?php
    $idade = 22;
    $testePratico = false;
    if(($idade >= 18) && ($testePratico == true)){
        echo("Pode tirar CNH");
    }else{
        if(($idade < 18) && ($testePratico == false)){
            echo("Reprovado pela idade e teste Prático");
        }else{
            if($idade < 18){
                echo("Reprovado pela idade");
            }else{
                echo("Reprovado pelo teste Prático");
            }
        }
    }
?>