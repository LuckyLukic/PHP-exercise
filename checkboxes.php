<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>

<body>

    <form action="checkboxes.php" method="post">

        <input type="checkbox" name="pizza" value="Pizza"> Pizza <br>
        <input type="checkbox" name="taco" value="Taco"> Taco <br>
        <input type="checkbox" name="pasta" value="Pasta"> Pasta <br>
        <input type="checkbox" name="hamburger" value="Hamburger"> Hamburger <br>
        <input type="submit" name="submit">

    </form>

</body>

</html>

<?php

if (isset($_POST["submit"])) {
    $checkboxSelected = false;

    if (isset($_POST["pizza"])) {
        echo "you love pizza! <br>";
        $checkboxSelected = true;
    }

    if (isset($_POST["taco"])) {
        echo "you love taco! <br>";
        $checkboxSelected = true;
    }

    if (isset($_POST["pasta"])) {
        echo "you love pasta! <br>";
        $checkboxSelected = true;
    }

    if (isset($_POST["hamburger"])) {
        echo "you love hamburger! <br>";
        $checkboxSelected = true;
    }

    if (!$checkboxSelected) {
        echo "you do not like anything";
    }

    echo " you do not like anything!";
}





// if (isset($_POST["sumbit"])) {

//     $foods = $_POST["foods"];

//     foreach ($foods as $food) {
//         echo $food . "<br>";
//     }


// }


?>