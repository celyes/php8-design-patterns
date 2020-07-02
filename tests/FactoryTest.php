<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Factory\carFactory;
use Patterns\Creational\Factory\Manufacturers\Toyota;

class FactoryTest extends TestCase {
    
    public function testCanMakeCar() 
    {
        
        $factory = new carFactory();
        $this->assertInstanceOf(Toyota::class, $factory->makeToyota());
        
    }
}