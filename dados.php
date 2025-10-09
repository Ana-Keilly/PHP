<?php
    $tecnologias = [
        'PHP','HTML','JAVASCRIPT','COBOL','JAVA'
    ];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['select'])){
            echo("você selecionou: ".$_POST['select']);
        }
    }else{
        echo"Você precisa clicar no botão enviar";
    }
    
?>