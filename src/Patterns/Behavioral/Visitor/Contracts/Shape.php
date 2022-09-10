<?php

namespace Patterns\Behavioral\Visitor\Contracts;

use Patterns\Behavioral\Visitor\Contracts\Visitor;

interface Shape
{
    public function calculateSurface(): float;
}
