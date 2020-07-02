<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Models\Person;

class PersonBuilder implements PersonInterface {

    private Person $person;

    public function createPerson() { 
        $this->person = new Person();  
    }

    public function addName(string $name) { 
        $this->person->setProperty('NAME', $name);
    }

    public function addAge(int $age) { 
        $this->person->setProperty('AGE', 30);
    }

    public function addHobby(string $hobby) { 
        $this->person->setProperty('HOBBY', $hobby);
    }

    public function getPerson(): Person 
    { 
        return $this->person;
    }
}