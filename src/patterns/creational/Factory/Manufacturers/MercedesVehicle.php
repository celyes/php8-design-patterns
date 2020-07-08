<?php 

namespace Patterns\Creational\Factory\Manufacturers;

class MercedesVehicle extends Vehicle 
{
    public function __construct() 
    {
        echo "The best or nothing!";
    }
}