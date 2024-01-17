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

    public const INTEREST_RATE = 2;
    public static int $count = 0;

    public function __construct(public string $name, public float $balance)
    {

        self::$count++; //static properties posssono essere accesse anche senza l'istanzia, quindi $this non funzionerebbe. con self ci riferiamo alla classe e non all'istanza.
    }


    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this; //questo e' utile se vogliamo ritornare l'instance e quindi concatenare piu' colte lo stesso metodo.
    }

}

