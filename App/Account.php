<?php

declare(strict_types=1);

namespace App;


// OLD WAY
// class Account
// {

//     public string $name;
//     public float $balance;

//     public function __construct(string $newName, float $newBalance)
//     {
//         $this->name = $newName;
//         $this->balance = $newBalance;
//     }

// }

//NEW WAYclass Account
class Account
{

    private const INTEREST_RATE = 2;
    public static int $count = 0;

    public function __construct(private string $name, private float $balance)
    {

        self::$count++; //static properties posssono essere accesse anche senza l'istanzia, quindi $this non funzionerebbe. con self ci riferiamo alla classe e non all'istanza.
    }


    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this; //questo e' utile se vogliamo ritornare l'instance e quindi concatenare piu' colte lo stesso metodo.
    }

    public function getBalance()
    {
        return "$" . $this->balance;
    }

    public function setBalance(float $newBalance)
    {
        if ($newBalance < 0) {
            return;  //blocca l'esecuzione di tutta la funzione (early return)
        }
        $this->balance = $newBalance; // possiamo skippare else perche' questra condizione funziona solo sei il balance e' >0. quindi e' l'unica cosa eseguibile.
        $this->sendEmail();
    }

    private function sendEmail()  //le funzioni private posssono essere utilizzate solo all'interno della classe
    {

    }

    public static function getMyConstant()
    {
        return self::INTEREST_RATE;
    }


}

