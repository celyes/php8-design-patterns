<?php

namespace Patterns\Behavioral\Visitor;

use Patterns\Behavioral\Visitor\Contracts\Visitor;
use Patterns\Behavioral\Visitor\Visitables\Circle;
use Patterns\Behavioral\Visitor\Visitables\Square;

class JsonExport implements Visitor
{
    /**
     * @param Circle $circle
     * @return string
     */
    public function visitCircle(Circle $circle): string
    {
        // do whatever login to export the visited object...
        return json_encode(['surface' => $circle->calculateSurface()]) ?: '';
    }

    /**
     * @param Square $square
     * @return string
     */
    public function visitSquare(Square $square): string
    {
        // do whatever login to export the visited object...
        return json_encode(['surface' => $square->calculateSurface()]) ?: '';
    }
}