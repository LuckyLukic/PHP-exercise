<!-- require ed include sono simili solo che con include il file e' opzionale e nel caso non si trovasse da un warning, include da fatal error-->

<?php require 'function.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>syntetize-validate</title>
</head>

<body>

    <form action="syntetize-validate-input.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username"> <br>
        <label for="password">password</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">
    </form>

    <?php saluta(); ?>

</body>

</html>

<?php



?>