<?php

namespace Patterns\Creational\AbstractFactory;


class DeviceFactory {

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