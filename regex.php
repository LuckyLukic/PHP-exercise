<?php

$testo = " Oggi è una bellissima giornata ma è freddo";
$pattern = "/Og[gk]i/";

if (preg_match($pattern, $testo)) { //MATCH SEMPLICE per matchare il pattern con il testo
    echo "match trovato!" . "<br>";
} else {
    echo "Match non trovato" . "<br>";
}

$pattern2 = "/è/";

$matches = preg_match_all($pattern2, $testo, $array); //Questo  per sapere quant volte e' ripetutto un qualcosa. viene creato un array in cui vengono contate le occorrenze
echo $matches . " occorrenze sono state trovate" . "<br>";

$nomeImmagine = "logo brand nero.jpg";
$patternSpazi = "/\s/";
$replacement = "_";

echo preg_replace($patternSpazi, $replacement, $nomeImmagine) . "<br>"; //cerca gli spazi, li sostituisce con un underscore alla variabile selezionata.

//QUantificatori
$patternQuant = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($patternQuant, $text); //crea un array con le singole parti della frase divise da spazi e virgole, lo cicliamo per stamparlo.

foreach ($parts as $part) {
    echo $part . "<br>";
}

//Ancore
$patternAncora = "/^M/";
$names = ["Marco Rossi", "Luca IAnnice", "MariaPia Giovannini"];
$anchorMatch = preg_grep($patternAncora, $names);

foreach ($anchorMatch as $match) {
    echo $match . ", ";
}
