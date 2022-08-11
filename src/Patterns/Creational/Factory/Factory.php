<?php

namespace Patterns\Creational\Factory;

use Patterns\Creational\Factory\Manufacturers\Manufacturer;

interface Factory
{
    public function make(string $carBrand): object;
}
