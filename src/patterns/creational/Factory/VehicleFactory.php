<?php 

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Manufacturers\MercedesVehicle;
use Patterns\Creational\Factory\Manufacturers\ToyotaVehicle;


class VehicleFactory {

    public function makeMercedes(): MercedesVehicle 
    {
        return new MercedesVehicle();
        
    }   
    public function makeToyota(): ToyotaVehicle 
    {
        return new ToyotaVehicle();
        
    }   
   

}