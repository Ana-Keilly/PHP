<?php
    $dsn="mysql:host=localhost;dbname=turmaj";
    $usuario="root";
    $senha="";

    try{
        $conexao = new PDO($dsn,$usuario,$senha);
        echo "Conexâo com banco de dados realizada";
    }catch(PDOException $erro){
         echo "Nâo foi possivel se conectar com o banco".$erro->getMenssage();
    }
?>