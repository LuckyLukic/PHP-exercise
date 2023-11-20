<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Exercise</title>
</head>

<body>

    <form action="arraysExercise.php" method="post">

        <label for="country"> Entr a country</label>
        <input type="text" name="country" value="country">
        <input type="submit" value="SUBMIT">


    </form>

</body>


</html>

<?php

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Dheli"
);

$capital = $_POST["country"];

echo "the capital is " . $capitals[$capital];

?>