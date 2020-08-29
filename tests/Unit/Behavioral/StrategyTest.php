<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Behavioral;

use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\Strategy\Renderer;
use Patterns\Behavioral\Strategy\Concrete\HTMLRendererStrategy;
use Patterns\Behavioral\Strategy\Concrete\JSONRendererStrategy;

final class StrategyTest extends TestCase {

    public function testIfHTMLRendererRendersInput()
    {
        $renderer = new Renderer(new HTMLRendererStrategy());
        $this->assertEquals(
            "This is some &lt;b&gt;bold&lt;/b&gt; text", 
            $renderer->render("This is some <b>bold</b> text")
        );
    }

    public function testIfJSONRendererRendersInput()
    {
        $renderer = new Renderer(new JSONRendererStrategy());
        $this->assertJson($renderer->render("This is some <b>bold</b> text"));
    }

}