<?php
if(!empty($_GET ['numero']) && is_numeric($_GET ['numero'])){
    $numero = $_GET ['numero'];
    $cont = 0;
    do {
        echo nl2br("O numero foi :".$numero++."\n");
        $numero = $numero + 1;
        $cont = $cont + 1;
       }while($cont <= 4);
}else{
    echo("Variável não setada ou vazia ou foi enviado um texto");
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>informe um numero: </label>
        <input type="text" name="numero" placeholder="digite um numero"/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>