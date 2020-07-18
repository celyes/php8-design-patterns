<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Flyweight\JuiceMaker;
use Patterns\Structural\Flyweight\JuiceShop;
use Patterns\Structural\Flyweight\Types\OrangeJuice;

final class FlyweightTest extends TestCase 
{
    public function testIfOrdersAreTaken() 
    {
        $juiceShop = new JuiceShop(new JuiceMaker());

        $juiceShop->newOrder('No sugar');
        $juiceShop->newOrder('With milk');
        $juiceShop->newOrder('Extra sugar');

        $this->assertCount(3, $juiceShop->serve());
        $this->assertIsArray($juiceShop->serve());

    }
    public function testIfFlyweightsAreCached()
    {
        $juiceShop = new JuiceShop(new JuiceMaker());
        $juiceShop->newOrder('No sugar', 1);
        $this->assertInstanceOf(OrangeJuice::class, $juiceShop->serve()[0]);

    }

}