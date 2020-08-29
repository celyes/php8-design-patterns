<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\PersonBuilder;

class Director
{
    public function create(PersonInterface $builder): object
    {
        $person = $builder
            ->createPerson()
            ->addName("Ilyes")
            ->addAge(25)
            ->getPerson();
        return $person;
    }
}
