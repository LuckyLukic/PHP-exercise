<?php

$numero = 5;
$numero2 = 18;
$somma = somma($numero, $numero2);

function somma( int $num1, int $num2): int {  //possiamo essere precisi indicando i tipi di lavori che vogliamo in entrata o dichiarare il tipo di valore in uscita. ma non e' obbligatorio
    $somma = $num1 + $num2;

    return $somma;
}

echo $somma;

?>