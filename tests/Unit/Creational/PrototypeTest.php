<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Creational;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Prototype\CarPrototype;
use Patterns\Creational\Prototype\TruckPrototype;

final class PrototypeTest extends TestCase {

    public function testIfObjectsAreCloning(): void
    {
        $carPrototype = new CarPrototype();
        $car = clone $carPrototype;
        $this->assertInstanceOf(CarPrototype::class, $car);

        $truckPrototype = new TruckPrototype();
        $truck = clone $truckPrototype;
        $this->assertInstanceOf(TruckPrototype::class, $truck);
    }

}