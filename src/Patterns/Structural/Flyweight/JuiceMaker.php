<?php

namespace Patterns\Structural\Flyweight;

use Patterns\Structural\Flyweight\Types\JuiceType;
use Patterns\Structural\Flyweight\Types\OrangeJuice;

class JuiceMaker
{

    /**
     * @var array<JuiceType> $availableJuiceTypes
     */
    protected array $availableJuiceTypes = [];

    /**
     * @param JuiceType $juiceType
     */
    public function make(JuiceType $juiceType): JuiceType
    {
        $this->availableJuiceTypes[] = $juiceType;
        return $this->availableJuiceTypes[count($this->availableJuiceTypes) - 1];
    }
}
