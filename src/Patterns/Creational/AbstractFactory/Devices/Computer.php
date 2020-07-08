<?php

namespace Patterns\Creational\AbstractFactory\Devices;

class Computer implements Device 
{

    private $price;
    private $type;

    public function __construct($price) 
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price  + 300;
    }

    public function getResolution() 
    {
        return '1366x768';
    }
}