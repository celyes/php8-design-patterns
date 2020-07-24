<?php

namespace Patterns\Creational\AbstractFactory;

interface CarInterface
{
    public function makeCompany(): object;
    public function makeModel(): object;
}
