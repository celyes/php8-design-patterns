<?php 

namespace Patterns\Creational\Builder;
use Patterns\Creational\Builder\PersonBuilder;

class Director
{

    public function create(PersonInterface $builder): Object
    {
        $person = $builder
            ->createPerson()
            ->addName("Ilyes")
            ->addAge(25)
            ->getPerson();
        return $person;
    }
}