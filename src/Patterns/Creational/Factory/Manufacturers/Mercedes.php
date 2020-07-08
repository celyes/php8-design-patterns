<?php 

namespace Patterns\Creational\Factory\Manufacturers;

class Mercedes implements Vehicle
{
    public function __construct() 
    {
        echo "The best or nothing!";
    }
}