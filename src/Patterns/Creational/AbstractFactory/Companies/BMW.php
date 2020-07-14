<?php

namespace Patterns\Creational\AbstractFactory\Companies;

class BMW implements CompanyInterface
{
    public function getDescirption(): string
    {
        return 'This is BMW';
    }
}
