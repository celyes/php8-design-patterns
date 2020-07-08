<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Factory\CarFactory;
use Patterns\Creational\Factory\Manufacturers\Toyota;

final class FactoryTest extends TestCase {
    
    private $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new CarFactory();
    }

    public function testCanMakeCar() 
    {
        $factory = new carFactory();
        $this->assertInstanceOf(Toyota::class, $this->factory->makeToyota());
        
    }
}