<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Creational;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Builder\Director;
use Patterns\Creational\Builder\Buildable;
use Patterns\Creational\Builder\Models\Person;
use Patterns\Creational\Builder\PersonBuilder;

final class BuilderDirectorTest extends TestCase {


    private Buildable $personBuilder;

    public function setUp(): void
    {
        parent::setUp();
        $this->personBuilder = new PersonBuilder();
    }

    public function testCanBuildPerson() : void
    {
        $newPerson = (new Director())->create($this->personBuilder);
        $this->assertInstanceOf(Person::class, $newPerson);
    }
}