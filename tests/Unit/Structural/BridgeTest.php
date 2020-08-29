<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Bridge\FormatService;
use Patterns\Structural\Bridge\Services\HTMLFormatter;
use Patterns\Structural\Bridge\Services\JSONFormatter;

final class BridgeTest extends TestCase 
{
    public function testIfCanFormatJSON()
    {
        $service = new FormatService(new JSONFormatter());
        $this->assertSame('{"message":"Hello, world"}', $service->get());
    }

    public function testIfCanFormatHTML()
    {
        $service = new FormatService(new HTMLFormatter());
        $this->assertSame('<h1>Hello, world</h1>', $service->get());
    }
} 