
<?php
//require exige q o arquivo mencionado exista se não ele não executa o script (ou seja é obrigatório), já o include executa o script mesmo que o arquivo não exista
    include('dados.php');
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
    <form method="POST" action="dados.php">
        <select name="select">
            <?php foreach ($tecnologias as $tecnologia){ ?>
                <option value="<?php echo("$tecnologia"); ?>"><?php echo("$tecnologia"); ?></option>
           <?php } ?>

        </select>
        <br>
        <input type ="submit" value ="enviar"/>
    </form>
</body>
</html>