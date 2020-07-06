<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Models\Person;


interface PersonInterface {
    public function createPerson(): void;
    public function addName(string $name): void;
    public function addAge(int $age): void;
    public function addHobby(string $hobby): void;
    public function getPerson(): Person;
}