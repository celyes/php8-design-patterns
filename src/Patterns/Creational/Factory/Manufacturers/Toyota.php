<?php

namespace Patterns\Creational\Factory\Manufacturers;

class Toyota implements Manufacturer
{
    public function motto(): string
    {
        return "We build the most reliable cars ever!";
    }
}
