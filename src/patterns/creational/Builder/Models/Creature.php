<?php 

namespace Patterns\Creational\Builder\Models;

class Creature 
{

    private array $data = [];

    public function setProperty($key, $value): void
    {
        $this->data[$key] = $value;
    }

}