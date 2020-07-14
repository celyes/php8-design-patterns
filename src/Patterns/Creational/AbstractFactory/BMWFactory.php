<?php

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\Companies\BMW;
use Patterns\Creational\AbstractFactory\Models\BMWModel;

class BMWFactory implements CarInterface
{
    public function makeCompany(): BMW
    {
        return new BMW();
    }
    public function makeModel(): BMWModel
    {
        return new BMWModel();
    }
}
