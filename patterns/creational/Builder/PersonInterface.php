<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Models\Person;


interface PersonInterface {
    public function createPerson();
    public function addName(string $name);
    public function addAge(int $age);
    public function addHobby(string $hobby);
    public function getPerson(): Person;
}