<?php 

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Manufacturers\Mercedes;
use Patterns\Creational\Factory\Manufacturers\Toyota;

use Exception;

class carFactory {

    public function makeCar($manufacturer) {
        if($manufacturer == '') {
            throw new Exception('Type cannot be null');
        }
        $manufacturer = ucfirst($manufacturer);
        return new $manufacturer();
        
    }   
   

}