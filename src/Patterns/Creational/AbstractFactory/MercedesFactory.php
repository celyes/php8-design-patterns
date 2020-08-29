<?php

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\Companies\Mercedes;
use Patterns\Creational\AbstractFactory\Models\MercedesModel;

class MercedesFactory implements CarInterface
{
    public function makeCompany(): Mercedes
    {
        return new Mercedes();
    }
    public function makeModel(): MercedesModel
    {
        return new MercedesModel();
    }
}
