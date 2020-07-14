<?php

namespace Patterns\Creational\AbstractFactory\Models;

class BMWModel implements ModelInterface
{
    public function getDescription(): string
    {
        return 'M5 Competition';
    }
}
