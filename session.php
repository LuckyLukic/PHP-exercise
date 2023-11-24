<?php

//la sessione e' cio' che avviene nel sito livello utente

session_start(); //iniziamo la seesione

$_SESSION['user_id'] = 23;
echo $_SESSION['user_id'];

unset($_SESSION['user_id']); // rimuovo dati di una sessione
echo $_SESSION['user_id'];

session_destroy(); //distrugge la sessione

//in php.ini c'e' una sezione che si chiama sessionmax lifetime dove possimao predefinire la duarata massima di una sessione.
