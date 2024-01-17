<?php

declare(strict_types=1);

namespace App;

class Utility
{


    //static method, non dobbiamo istanziare una classe per accederci. classe utility solitamente e' fatta da static method per metodi di servizio generale
    public static function printArr(array $array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";

    }
}