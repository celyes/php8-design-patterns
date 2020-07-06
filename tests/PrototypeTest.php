<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Prototype\CarPrototype;
use Patterns\Creational\Prototype\TruckPrototype;

final class PrototypeTest extends TestCase {

    public function testIfObjectsAreCloning() 
    {
        $carPrototype = new CarPrototype();
        $car = clone $carPrototype;
        $car->setModel('Mercedes A45');
        $this->assertInstanceOf(CarPrototype::class, $car);

        $truckPrototype = new TruckPrototype();
        $truck = clone $truckPrototype;
        $truck->setModel('Volvo 750');
        $this->assertInstanceOf(TruckPrototype::class, $truck);
        
        
    }

}