<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\AbstractFactory\DeviceFactory;
use Patterns\Creational\AbstractFactory\Computer;

class AbstractFactoryTests extends TestCase {

    private $deviceFactory;

    public function testCanCreateComputer() 
    {
        $this->deviceFactory = new DeviceFactory(10000);
        $computer = $this->deviceFactory->createComputer();
        $this->assertInstanceOf(Computer::class, $computer);
    }
}