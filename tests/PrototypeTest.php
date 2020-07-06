<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Prototype\CarPrototype;
use Patterns\Creational\Prototype\TruckPrototype;

final class PrototypeTest extends TestCase {

    public function testIfObjectsAreClones() 
    {
        $carPrototype = new CarPrototype();
        $truckPrototype = new TruckPrototype();

        for($i = 0; $i < 10; $i++) {
            $car = clone $carPrototype;
            $car->setModel('Mercedes A45');
            $this->assertInstanceOf(CarPrototype::class, $car);
        }
        for($i = 0; $i < 10; $i++) {
            $truck = clone $truckPrototype;
            $truck->setModel('Volvo 750');
            $this->assertInstanceOf(TruckPrototype::class, $truck);
        }
        
    }

}