<?php

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Manufacturers\Manufacturer;
use Patterns\Creational\Factory\Exceptions\ManufacturerNotFoundException;

class VehicleFactory implements Factory
{
    /**
     * @param string $carBrand
     * @return object
     */
    public function make(string $carBrand): object
    {
        $className = "\Patterns\Creational\Factory\Manufacturers\\" . ucfirst($carBrand);
        if (class_exists($className)) {
            return new $className();
        }
        throw new ManufacturerNotFoundException('Manufacturer not found!');
    }
}
