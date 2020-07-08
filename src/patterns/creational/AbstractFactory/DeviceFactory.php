<?php

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\Devices\Computer;
use Patterns\Creational\AbstractFactory\Devices\Television;

class DeviceFactory 
{

    private $price;

    public function __construct($price) 
    {
        $this->price = $price;
    }
    
    public function createTelevision(): Television
    {
        return new Television($this->price);
    }

    public function createComputer(): Computer
    {
        return new Computer($this->price);
    }


}