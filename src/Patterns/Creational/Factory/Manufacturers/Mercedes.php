<?php

namespace Patterns\Creational\Factory\Manufacturers;

class Mercedes implements Vehicle
{
    public function __construct()
    {
        return "The best or nothing!";
    }
}
