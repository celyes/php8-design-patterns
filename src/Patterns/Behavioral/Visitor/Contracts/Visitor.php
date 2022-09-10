<?php

namespace Patterns\Behavioral\Visitor\Contracts;

use Patterns\Behavioral\Visitor\Visitables\Circle;
use Patterns\Behavioral\Visitor\Visitables\Square;

interface Visitor
{
    public function visitCircle(Circle $circle): string;
    public function visitSquare(Square $square): string;
}
