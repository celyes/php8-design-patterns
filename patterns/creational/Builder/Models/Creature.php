<?php 

namespace Patterns\Creational\Builder\Models;

class Creature {

    private array $data = [];

    public function setProperty($key, $value)
    {
        $this->data[$key] = $value;
    }

}