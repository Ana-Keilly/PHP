<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>SisCadProduto</title>
</head>
<body>
    <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastrarProduto.php">Cadastrar</a></li>
        <li><a href="consultarProduto.php">Consultar</a></li>
        </ul>
    </nav>
        <h1>cadastrar produto</h1>

        <form method="POST" action="cadastrarProdutoControl.php">
            <label for="">nome produto;</label>
            <input type="text" name="nome">
            <br><br>

            <label for="">valor produto;</label>
            <input type="text" name="valor">
            <br><br>

            <label for="">quantidade produto;</label>
            <input type="number" name="quantidade">
            <br><br>

            <label for="">descricao produto;</label>
            <input type="text" name="descricao">
            <br><br>

            <input type="submit" value="cadastrar" name="btnCadastrar"/>
        </form>

</body>
</html>