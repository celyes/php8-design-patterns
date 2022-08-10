<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Bridge\FormattingService;
use Patterns\Structural\Bridge\Services\HTMLFormatter;
use Patterns\Structural\Bridge\Services\JSONFormatter;

final class BridgeTest extends TestCase 
{
    public function testIfCanFormatJSON(): void
    {
        $service = new FormattingService(new JSONFormatter());
        $this->assertSame('{"message":"Hello, world"}', $service->get());
    }

    public function testIfCanFormatHTML(): void
    {
        $service = new FormattingService(new HTMLFormatter());
        $this->assertSame('<h1>Hello, world</h1>', $service->get());
    }
} 