<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Builder\Director;
use Patterns\Creational\Builder\PersonBuilder;
use Patterns\Creational\Builder\Models\Person;

class BuilderDirectorTest extends TestCase {
    public function testCanBuildPerson() 
    {
        $personBuilder = new PersonBuilder();
        $newPerson = (new Director())->create($personBuilder);
        $this->assertInstanceOf(Person::class, $newPerson);
    }
}