<?php

echo "I like Pizza <br>";
echo "It's really good <br>";
//this is a comment

$name = "Luca"; //string
$food = "pizza";
$age = 43; //integer
$quantity = 3;
$price = 4.99; //float
$employed = true; //boolean  
$for_sale = false;
$total = $quantity * $price;


echo $name;

echo "Hello {$name} <br>";
echo "Hello {$name}, do you love {$food}?<br>";
echo "I have {$age} years old <br>";
echo "Your pizza is \${$price} <br>"; // \$ per specificare che vogliamo il simbolo del dollaro

echo "You took {$quantity} pizzas, the total amount is \${$total} <br>";

// ARITHMETIC

// Precedence: () _ ** _ */% _ + -


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
    <br>
    <form action="index.php" method="post">
        <label for="username">username</label><br>
        <input type="text" name="username"><br>

        <label for="password">password</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value"LogIn">
    </form>

    <form action="index.php" method "get">

        <label for="quantity">quantity</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">

    </form>

</body>

</html>

<?php

echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";
// POST e' piu' sicuro, non ha limite di dati ma non e' chacbile ma in definitiva migliore per inviare credenziali.

$pizzaQuantity = $_GET["quantity"];
$pizzaPrice = 4.90;
$totalAmount = $pizzaPrice * $pizzaQuantity;


echo "{$pizzaQuantity} <br>"; //Recupera dal form ocn metodo Get, il valore di username
// con il metodo GET i dati sensibili sono appended all'URL e quindi esposti.
// GET migliore per bookmark con valori, e perce' le richieste sono chachabili.In definitiva migliore per ricercare pagine

echo "You have ordered {$pizzaQuantity} pizza/s at \${$pizzaPrice} each <br>";
echo "total amount is \${$totalAmount}";
?>