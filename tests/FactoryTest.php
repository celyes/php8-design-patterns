<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Factory\carFactory;
use Patterns\Creational\Factory\Manufacturers\Toyota;

class FactoryTest extends TestCase {
    
    private $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new carFactory();
    }

    public function testCanMakeCar() 
    {
        $factory = new carFactory();
        $this->assertInstanceOf(Toyota::class, $this->factory->makeToyota());
        
    }
}