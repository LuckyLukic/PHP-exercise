<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="global_variables.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username"> <br>
        <label for="password">password</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">
    </form>

</body>

</html>

<?php

$nome = $_POST["nome"];  //scope vriabile globale

function saluta()
{
    $nome = "francesco"; //scope varibile di blocco anche se ha lo stesso nome di una variabile globale.
    echo $GLOBALS["nome"]; //vado a richiamare la variabile globale

    echo $nome;
}

saluta();
echo $nome;


?>