<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Models\Person;

class PersonBuilder implements PersonInterface {

    private Person $person;

    public function createPerson(): void
    { 
        $this->person = new Person();  
    }

    public function addName(string $name): void
    { 
        $this->person->setProperty('NAME', $name);
    }

    public function addAge(int $age): void 
    { 
        $this->person->setProperty('AGE', 30);
    }

    public function addHobby(string $hobby): void
    { 
        $this->person->setProperty('HOBBY', $hobby);
    }

    public function getPerson(): Person 
    { 
        return $this->person;
    }
}