<?php

namespace App;

class EmptyArrayException extends \Exception
{
    protected $message = "array is empty"; //$message e' ereditata da Exception che e' protected.

}