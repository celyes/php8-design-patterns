<?php

namespace Patterns\Behavioral\Visitor\Visitables;

use Patterns\Behavioral\Visitor\Contracts\Shape;
use Patterns\Behavioral\Visitor\Contracts\Visitor;
use Patterns\Behavioral\Visitor\Contracts\Visitable;

class Circle implements Shape, Visitable
{
    public function __construct(private int $radius)
    {
    }

    /**
     * @param Visitor $visitor
     *
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitCircle($this);
    }
    /**
     * @return float
     */
    public function calculateSurface(): float
    {
        return round(M_PI * pow($this->radius, 2), 2);
    }
}
