<?php

$classi = [

["luca", "francesco", "giovanni"],
["sara", "federica", "chiara"]

];

echo $classi[0][2] . "<br>";
echo $classi[1][1]  . "<br>";

for ($i = 0; $i < count($classi); $i++) {
    echo "classe: " .$i . "<br>";
    for ($j = 0; $j < count($classi[$i]); $j++) {
        echo $classi[$i][$j] . "<br>";

    }
}

?>