<?php

//file di testo di piccole dimensioni usate specialmente per salvare le preferenze del sito
// i vlaori possibili del coockie sono (name, value, expire, path, domain, secure)
// per controllarlo: inspect, application coockie

setcookie("username", "Infedele", time() + 60 * 60 * 24 * 30);

//prendiamo variabile super globale per mettere a schermo il coockie:
if (isset($_COOKIE['username'])) {
    echo $_COOKIE['username']; //prendiamo il valore nome
} else {echo "coockie not set";
}

//per rimuovere un coockie lo richiamiamo e lo risettiamo con il time() al passato;

setcookie("username", " ", time() - 3600);
