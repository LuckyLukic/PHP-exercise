<?php

namespace App;

class SuperToaster extends Toaster
{

    protected int $slots = 4;
    private int $duration = 1;

    public function toast()
    {
        parent::toast(); //questo e' un merge/override. utilizziamo il metodo del parent + aggiungiamo il nostro
        echo " for $this->duration minutes"; //override Toaster Method
    }

}