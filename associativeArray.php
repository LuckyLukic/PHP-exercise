<?php

//simile agli Objects di JS: associazione chiave valore

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Dheli"
);

$capitalsss = [ //short way to create an associative array
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Dheli"
];

echo "{$capitals["USA"]} <br>"; // to get the value

foreach ($capitals as $Key => $Value) {  //to iterate all the key/values

    echo "{$Key} = {$Value} <br>";

}

$capitals["USA"] = "Las Vegas"; //now USA capital = Las Vegas
$capitals["China"] = "Beijin"; // we added a new key/value 
$flipped_array = array_flip($capitals); //switch keys/values
$reversed_capitals = array_reverse($capitals); // reverse the array;

foreach ($capitals as $Key => $Value) {  //to iterate all the key/values

    echo "{$Key} = {$Value} <br>";

}

array_pop($capitals); //remove the last pair in the array
array_shift($capitals); //remove the first pair in the array

$keys = array_keys($capitals); // array_keys return a new array so I save in a new variable the list of keys
$values = array_values($capitals); // array_values return a new array so I save in a new variable the list of keys

foreach ($keys as $key) {  //to iterate all the key/values

    echo "{$key} <br>";

}

foreach ($values as $value) {  //to iterate all the key/values

    echo "{$value} <br>";

}

foreach ($flipped_array as $Key => $Value) {  //to iterate all the key/values

    echo "{$Key} = {$Value} <br>";

}

foreach ($capitals as $capital) {  //to iterate all the key/values

    echo "{$capital} <br>";

}

echo count($capitals)

    //to sort the associative arrays: ksort(): per key, rksort(); per reverse key, asort(): per value; rasort(): per reverse value.
    ?>