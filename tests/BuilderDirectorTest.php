<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Builder\Director;
use Patterns\Creational\Builder\PersonBuilder;
use Patterns\Creational\Builder\Models\Person;

class BuilderDirectorTest extends TestCase {
    private $personBuilder;
    public function setUp(): void
    {
        parent::setUp();
        $this->personBuilder = new PersonBuilder();
    }
    public function testCanBuildPerson() 
    {
        $newPerson = (new Director())->create($this->personBuilder);
        $this->assertInstanceOf(Person::class, $newPerson);
    }
}