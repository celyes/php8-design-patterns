<?php

namespace Patterns\Behavioral\Visitor\Visitables;

use Patterns\Behavioral\Visitor\Contracts\Shape;
use Patterns\Behavioral\Visitor\Contracts\Visitor;
use Patterns\Behavioral\Visitor\Contracts\Visitable;

class Square implements Shape, Visitable
{
    /**
     * @param int $side
     */
    public function __construct(private int $side)
    {
    }

    /**
     * @param Visitor $visitor
     *
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitSquare($this);
    }

    /**
     * @return float
     */
    public function calculateSurface(): float
    {
        return round(pow($this->side, 2), 2);
    }
}
