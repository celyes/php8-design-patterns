<?php 

namespace Patterns\Creational\Builder;
use Patterns\Creational\Builder\PersonBuilder;

class Director {

    public function create(PersonInterface $builder) {
        $builder->createPerson();
        $builder->addName("Ilyes");
        $builder->addAge(25);
        return $builder->getPerson();
    }
}