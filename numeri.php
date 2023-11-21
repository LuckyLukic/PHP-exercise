<?php


$operatore1 = 3;
$operatore2 = 8.12;
$operatore3 = "10";
$operatore4 = "10 amici"; // questa variabile ovviamente non puo' essere concatenata ad un numero.
$operatore5 = (int) "10"; // castiamo "10" come fosse un intero.



echo $operatore1 + $operatore2 . "<br>";

echo $operatore1 + $operatore3 . "<br>"; // questo mi ritorna comunque un numero a differenza di JS

$risultato = $operatore2 + $operatore3; 

var_dump(is_float($risultato));


?>