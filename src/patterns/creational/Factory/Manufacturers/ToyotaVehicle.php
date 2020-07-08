<?php 

namespace Patterns\Creational\Factory\Manufacturers;

class ToyotaVehicle extends Vehicle 
{
    public function __construct() 
    {
        echo "We build the most reliable cars ever!";
    }
}