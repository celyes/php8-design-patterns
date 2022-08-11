<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Models\Person;

class PersonBuilder implements Buildable
{
    /**
     * @var Person $person
     */
    private Person $person;

    public function create(): self
    {
        $this->person = new Person();
        return $this;
    }

    public function addName(string $name): self
    {
        $this->person->setProperty('NAME', $name);
        return $this;
    }

    public function addAge(int $age): self
    {
        $this->person->setProperty('AGE', 30);
        return $this;
    }

    public function addHobby(string $hobby): self
    {
        $this->person->setProperty('HOBBY', $hobby);
        return $this;
    }

    public function getPerson(): Person
    {
        return $this->person;
    }
}
