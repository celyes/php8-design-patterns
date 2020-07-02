<?php 

namespace Patterns\Creational\Factory\Manufacturers;

class Mercedes extends Car {
    public function __construct() {
        echo "The best or nothing!";
    }
}