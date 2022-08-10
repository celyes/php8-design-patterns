<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Buildable;
use Patterns\Creational\Builder\Models\Creature;

class Director
{
    public function create(Buildable $builder): Creature
    {
        $person = $builder
            ->create()
            ->addName("Ilyes")
            ->addAge(25)
            ->getPerson();
        return $person;
    }
}
