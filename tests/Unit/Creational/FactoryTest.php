<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Creational;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Factory\Factory;
use Patterns\Creational\Factory\VehicleFactory;
use Patterns\Creational\Factory\Manufacturers\Toyota;
use Patterns\Creational\Factory\Manufacturers\Mercedes;
use Patterns\Creational\Factory\Exceptions\ManufacturerNotFoundException;

final class FactoryTest extends TestCase 
{
    
    private Factory $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new VehicleFactory();
    }

    public function testCanMakeCar(): void
    {
        $factory = new VehicleFactory();
        $this->assertInstanceOf(Toyota::class, $this->factory->make('toyota'));
        $this->assertInstanceOf(Mercedes::class, $this->factory->make('mercedes'));
        $this->expectException(ManufacturerNotFoundException::class);
        $this->assertInstanceOf(Mercedes::class, $this->factory->make('bmw'));
    }
}