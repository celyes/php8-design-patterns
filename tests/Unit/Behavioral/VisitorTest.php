<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

use Patterns\Behavioral\Visitor\Visitables\Square;
use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\Visitor\JsonExport;
use Patterns\Behavioral\Visitor\Visitables\Circle;

final class VisitorTest extends TestCase
{
    public function testIfVisitorWorksForCircles(): void
    {
        $circle = new Circle(2);
        $visitResult = $circle->accept(new JsonExport());
        $this->assertJsonStringEqualsJsonString($visitResult, '{"surface":12.57}');
    }

    public function testIfVisitorWorksForSquares(): void
    {
        $square = new Square(2);
        $visitResult = $square->accept(new JsonExport());
        $this->assertJsonStringEqualsJsonString($visitResult, '{"surface":4}');
    }
}