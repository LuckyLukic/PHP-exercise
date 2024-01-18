<?php

namespace App;

interface RestaurantInterface
{

    // non c'e' bisogno di usare la Kw abstract. i metodi non sono MAI implementati. sempre public or protected.
    public function prepareFood();

}