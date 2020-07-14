<?php

namespace Patterns\Creational\AbstractFactory\Companies;

class Mercedes implements CompanyInterface
{
    public function getDescirption(): string
    {
        return 'This is Mercedes-benz';
    }
}
