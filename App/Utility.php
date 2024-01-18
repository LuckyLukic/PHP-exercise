<?php

declare(strict_types=1);

namespace App;

class Utility
{

    /**
     * Neatly prints an array
     * 
     * Outputs an array surrounded by pre tags for formatting
     * 
     * @param array $array The array to output
     */


    //static method, non dobbiamo istanziare una classe per accederci. classe utility solitamente e' fatta da static method per metodi di servizio generale
    public static function printArr(array $array)
    {

        if (count($array) === 0) {
            //throw new \Exception("Array is empty"); //generic
            //throw new \InvalidArgumentException("Array is empty");  //specific
            throw new EmptyArrayException(); //personalized. RImuoviamo il backslash perche la classe e' presente nel namespace App
        }
        echo "<pre>";
        print_r($array);
        echo "</pre>";

    }
}