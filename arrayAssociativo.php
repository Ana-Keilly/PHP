<?php
    $carros = [
        'Uno' => 1991,
        'Palio' => 2000,
        'Gol' => 2025,
        'Passat' => 1998,
        'Parati' => 1999
    ];

    if(!empty($_GET['ano'])){
        $ano = $_GET['ano'];
        echo nl2br ("Você selecionou o(s) modelos(s) : "."\n");
        //foreach ($carros as $_GET['modelo'] => $ano){
        //echo nl2br ("$modelo"."\n");
        //}
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
        <?php foreach ($carros as $modelo => $ano){ ?>
     <input type="checkbox" name="ano[]" value= "<?php echo $ano; ?>" />
     <label><?php echo $modelo; ?></label>
     <br/>
      <?php } ?>   

        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>