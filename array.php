<?php

$food_1 = "apple";
$food_2 = "orange";
$food_3 = "banana";
$food_4 = "coconut";

$foods = array("apple", "orange", "banana", "coconut");
$foodsss = ["apple", "orange", "banana", "coconut"]; //possiamo creare l'array anche cosi'

//we can't print the whole array, we must iterate it to get what's inside



echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";


foreach ($foods as $food) {  //iteration with foreach

    echo $food . "<br>";

}

$foods[0] = "pineapple";  //now apple becomes pineapple;

array_push($foods, "kiwi", "grape");  //this would app kiwi and grape at the end of the list.

foreach ($foods as $food) {  //iteration with foreach

    echo $food . "<br>";

}

for ($i = 0; $i < count($foods); $i++) { //metodo tradizionale, count() per fare il check sulla lunghezza totale dell'array
    echo $foods[$i] . "<br>";
}

array_pop($foods); //eliminate the last item of the list;

foreach ($foods as $food) {  //iteration with foreach

    echo $food . "<br>";

}

array_shift($foods); // eliminate the first item of the list

foreach ($foods as $food) {  //iteration with foreach

    echo $food . "<br>";

}

$reversed_food = array_reverse($foods); //create a new reversed array. we have to save it into a variable.

foreach ($reversed_food as $food) {  //iteration with foreach

    echo $food . "<br>";

}

echo count($reversed_food) . "<br>"; // to count the total element inside the array.

sort($foodsss); // per elencarlo in ordine alfabetico;
print_r($foodsss) ; //print_r() per mandare a schermo un array  con gli indici

rsort($foodsss);
print_r($foodsss);

?>