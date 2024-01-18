<?php

namespace APP;

class Toaster
{

    protected int $slots = 2;

    public function toast()
    {
        echo "Toastin Bread";
    }

    public function getSlots()
    {
        return $this->slots;
    }
}