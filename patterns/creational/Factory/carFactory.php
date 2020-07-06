<?php 

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Manufacturers\Mercedes;
use Patterns\Creational\Factory\Manufacturers\Toyota;

use Exception;

class carFactory {

    public function makeToyota(): Toyota 
    {
        return new Toyota();
        
    }   
   

}