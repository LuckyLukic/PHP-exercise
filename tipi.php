<?php

$nome = "luca";
$eta = 43;  //qui possiamo eventualmente abiare sia valore che tipo
$temperatura = 36.07;
$is_onine = true;
$intressi = ['calcio', 'basket', 'musica'];
$fidanzata = null;

class Persona {
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

$persona1 = new Persona('Luca', 'Iannice');

var_dump($eta); //var_dump displays structured info

$eta = "ciaone";

var_dump($eta);


?>