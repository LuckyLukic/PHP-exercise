<?php

$file = "file.txt";

if (file_exists($file)) {
    $ref = fopen($file, "r"); //file open  r = reading

    $content = fread($ref, "20"); //prende 20 caratteri
    $content2 = fread($ref, filesize("$file")); //prende tutto il file
    echo $content . "<br>";
    echo $content2;

    fclose($ref);
} else {
    echo "il file non esiste";
}

if (file_exists($file)) {

    $content = file_get_contents($file);
    echo $content;

} else {
    echo "il file non esiste";
}

//fread($file, $quantoLeggere)  si puo' leggere una prozione del file. I lfile prima ddeve essere aperto
//readFile ($file) possiamo leggere il file senza prima aprirlo.
//file_get_content($file)

// r+ = reading and writing
// w = writing, se esiste contenuto lo cancella prima. se nonesiste il file lo crea
// w+ = come w in più può anche leggerlo
// a = writing ma senza cancellare prima il contenuto, lo aggiunge al fondo. se il file non esiste lo crea
// a+ = come a ma può anche leggere
// x = solo per scrittura, se il file esiste già genera un errore e crea il file
// x+ = come x ma può anche leggere
