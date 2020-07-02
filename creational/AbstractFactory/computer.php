<?php

namespace DesignPatterns\Creational\AbstractFactory;


class Computer implements electricalDevice {

    private $price;

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