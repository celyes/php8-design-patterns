<?php

namespace Patterns\Creational\AbstractFactory\Models;

class MercedesModel implements ModelInterface
{
    public function getDescription(): string
    {
        return 'A45S AMG';
    }
}
