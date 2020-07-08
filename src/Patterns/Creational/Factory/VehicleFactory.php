<?php 

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Manufacturers\Mercedes;
use Patterns\Creational\Factory\Manufacturers\Toyota;


class VehicleFactory {

    public function makeMercedes(): Mercedes 
    {
        return new Mercedes();
        
    }   
    public function makeToyota(): Toyota 
    {
        return new Toyota();
        
    }   
   

}