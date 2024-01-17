<?php

declare(strict_types=1);

namespace App\Bank;


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

    public function __construct(public string $name, public float $balance)
    {
    }


    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this; //questo e' utile se vogliamo ritornare l'instance e quindi concatenare piu' colte lo stesso metodo.
    }

}

