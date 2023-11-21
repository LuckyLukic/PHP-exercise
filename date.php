<?php
//timestamp = quantita' secondi passati da 1 GEnnaio 1970
//date() converte timestamp in formato leggibile

$date = date("d-m-Y", 0); // 0 uguale 1 gennaio 1970
echo $date . "<br>";

// PARAMETRI:

// d = numero del giorno
// D = nome del giorno abbreviato
// l = nome del giorno completo
// m = numero del mese
// M = nome del mese
// y = anno con 2 cifre finali
// Y = anno con 4 cifre finali
// per separare possiamo usare - . /

// h = ore in formato 12
// H = ore in formato 24
// i = minuti
// s = secondi
// a = am e pm in minuscolo
// A = AM e PM in maiuscolo

$data2 = date("H:i:s", 1878558103);
echo $data2 . "<br>";

// time() ci da il timestamp corrente
$time1 = date("d-m-y H:i:s", time());
echo $time1 . "<br>";

// mktime(ore, minuti, secondi, mese, giorno ,anno) per trasformare una data in un timestamp.
$today = mktime(15, 15, 00, 11, 21, 2023);
echo $today . "<br>";

//se abbiamo una data possiamo usare strtotime(gg-mm-yyyy) per trasformare una data leggibile in timestamp
$today2 = strtotime(time()); //possiamo usare kws such as "yesterday", "tomorrow", "now"....
echo $today2 . "<br>";

//calcolo delle date
$date3 = date("d-m-Y", strtotime("now" . " +7 days"));
echo $date3;
