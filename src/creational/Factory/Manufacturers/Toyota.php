<?php 

namespace Patterns\Creational\Factory\Manufacturers;

class Toyota extends Car {
    public function __construct() 
    {
        echo "We build the most reliable cars ever!";
    }
}