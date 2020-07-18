<?php 

namespace Patterns\Structural\Flyweight;

use Patterns\Structural\Flyweight\Types\OrangeJuice;

class JuiceMaker
{
    public function make(string $juiceType)
    {
        if (empty($this->available[$juiceType])) {
            $this->available[$juiceType] = new OrangeJuice();
        }
        return $this->available[$juiceType];
    }
}