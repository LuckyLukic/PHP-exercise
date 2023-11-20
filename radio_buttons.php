<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>

<body>

    <form action="radio_buttons.php" method="post">

        <input type="radio" name="credit_card" value="Visa"> Visa <br>
        <input type="radio" name="credit_card" value="Mastercard"> Mastercard <br>
        <input type="radio" name="credit_card" value="Amex"> Amex <br>
        <input type="submit" name="confirm" value="confirm">

    </form>

</body>

</html>

<?php

// the below method is correct but let's try with a switch case
// if (isset($_POST["confirm"])) {

//     $credit_card = $_POST["credit_card"];

//     if (empty($credit_card)) {
//         echo "You must select a payment method";
//     } else {
//         echo $credit_card;
//     }

// }

$credit_card = null;

if (isset($_POST["confirm"])) {

    $credit_card = $_POST["credit_card"];

    switch ($credit_card) {

        case "Visa":
            echo "you selected {$credit_card}";
            break;

        case "Mastercard":
            echo "you selected {$credit_card}";
            break;

        case "Amex":
            echo "you selected {$credit_card}";
            break;

        default:
            echo "you must select a payment method";

    }
}



?>