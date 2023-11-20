<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset-empty</title>
</head>

<body>

    <form action="isset_empty.php" method="post">

        <label for="username">Username</label>
        <input type="text" name="username">

        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" name="login" value="LOGIN">

    </form>



</body>

</html>

<?php

foreach ($_POST as $key => $Value) {  //itera i valori dei 2 campi + bel bottone login. $_POST crea un array con la lista dei valori
    echo "{$key} = {$Value} <br>";
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is missing";
    } else if (empty($password)) {
        echo "Password is missing";
    } else {
        echo "hello {$username}";
    }
}

?>