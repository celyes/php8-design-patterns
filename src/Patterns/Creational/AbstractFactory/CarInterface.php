<?php

namespace Patterns\Creational\AbstractFactory;

interface CarInterface
{
    public function makeCompany(): Object;
    public function makeModel(): Object;
}
