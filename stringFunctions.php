<?php

$username = "Luca Iannice";
$phone = "123-456-789";
$userArray = array("Luca", "The Magic", "Iannice");
$randomWords = "Lorem Ipsum dicit est";

// $username = strtolower($username); all lowercase
// $username = strtoupper($username); all uppercase
// $username = trim($username); no spaces
// $username = str_pad($username, 20, "0"); add extra spaces (20 total spaces including) and fill it with "0" 
$phone = str_replace("-", "/", $phone); // replace something with something else
// $username = strrev($username);
// $username = str_shuffle($username);
$equals = strcmp($username, "Luca Iannice"); //compare and returns true or false
$count = strlen($phone); // length of the string
$index = strpos($phone, "/"); // indicates the position of a specific character
$firstname = substr($username, 0, 4); // takes username and estrapolate from index 0 included to 4 excluded
$lastname = substr($username, 5); // take everything after index 5 included
$newString = str_replace("dicit", "CIAO", $randomWords); //primo argomento la parola che vogliamo cambiare, secondo quella che vogliamo aggiungere, terzo la variabile di riferimento
$fullname = explode(" ", $username); // creates an array with each single part of the string divided by " "
$userArray = implode("-", $userArray); // transform the array into a string. Each element is separated by "-"
$wordCount = str_word_count($randomWords); //counts the number of words.
$wordPosition = strpos($randomWords, "Ipsum"); //case sensitive, check form which position the word starts, in this case from 6th position


echo $username . "<br>";
echo $phone . "<br>";
echo $equals . "<br>";
echo $count . "<br>";
echo $index . "<br>";
echo $firstname . "<br>";
echo $newString . "<br>";

echo $lastname . "<br>";
foreach ($fullname as $name) {
    echo $name . "<br>";
}
echo $userArray . "<br>";
echo $wordCount . "<br>";
echo $wordPosition . "<br>";



?>