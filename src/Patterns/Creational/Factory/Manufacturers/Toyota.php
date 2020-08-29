<?php

namespace Patterns\Creational\Factory\Manufacturers;

class Toyota implements Vehicle
{
    public function __construct()
    {
        return "We build the most reliable cars ever!";
    }
}
