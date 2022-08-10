<?php

namespace Patterns\Creational\Factory\Manufacturers;

class Mercedes implements Manufacturer
{   
    public function motto(): string
    {
        return "The best or nothing!";

    }
}
