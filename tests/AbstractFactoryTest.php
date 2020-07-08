<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\AbstractFactory\DeviceFactory;
use Patterns\Creational\AbstractFactory\Devices\Computer;

final class AbstractFactoryTests extends TestCase {

    private $deviceFactory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->deviceFactory = new DeviceFactory(10000);
    }
    
    public function testCanCreateComputer()
    {
        $computer = $this->deviceFactory->createComputer();
        $this->assertInstanceOf(Computer::class, $computer);
    }
}