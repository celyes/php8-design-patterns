<?php

namespace Patterns\Creational\AbstractFactory\Devices;


class Television implements Device
{

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