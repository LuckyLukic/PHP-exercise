<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sfera</title>
</head>

<body>

    <form action="index2.php" method="post">

        <label for="radius">radius</label>
        <input type="text" name="radius">
        <input type="submit" value="CALCULATE">

    </form>

    <form action="index2.php" method="post">

        <label for="counter">Enter a Number</label>
        <input type="text" name="counter">
        <input type="submit" value="START">
        <input type="submit" name="stop" value="STOP" </form>

</body>

</html>

<?php

$radius = $_POST["radius"];
$circumference = 2 * pi() * $radius;
$area = pi() * pow($radius, 2);
$volume = 4 / 3 * pi() * pow($radius, 3);

if ($radius > 0) {

    echo "circumference = " . round($circumference, 2) . " cm <br>";
    echo " area = " . round($area, 2) . " cm^2 <br>";
    echo " volume = " . round($volume, 2) . " cm^3 <br>";

} else {

    echo " radius must be > 0";
}

$date = date("l");

switch ($date) {
    case "monday":
        echo "I hate Mondays";
        break;

    case "tuesday":
        echo "At least is already tuesday";
        break;

    case "wednesday":
        echo "it's already Wednesday";
        break;

    default:
        echo " week after week";

}

$counter = $_POST["counter"];

for ($i = 1; $i <= 0; $i++) {

    echo $i . "<br>";

}

$second = 0;
$running = true;

while ($running) {

    if (isset($_POST["stop"])) {
        $running == false;

    } else {

        $seconds++;
        echo $second . "<br>";

    }
}

?>