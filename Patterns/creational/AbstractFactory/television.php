<?php

namespace Patterns\Creational\AbstractFactory;


class Television implements electricalDevice {

    private $price;

    public function __construct($price) 
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price  + 120;
    }

    public function getResolution() 
    {
        return '1920x1080';
    }


}