<?php
session_start();
require('header.php');

if($_SESSION['Aviso!']) {
    echo $_SESSION['Aviso!'];
    $_SESSION['Aviso!'] = '';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validaçao de formulario</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="recebedor.php" action="">

            <label for="">
                Nome:
                <br>
                <input type="text" name="nome">
            </label>
            <br>
            <br>
            <label for="">
                E-mail:
                <br>
                <input type="email" name="email">
            </label>
            <br>
            <br>
            <label for="">
                Idade:
                <br>
                <input type="text" name="idade">
            </label>
            <br>
            <br>

            <input id="btn" type="submit" value="Enviar">

        </form>
    </div>
   

</body>
</html>