<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Flyweight\JuiceShop;
use Patterns\Structural\Flyweight\JuiceMaker;
use Patterns\Structural\Flyweight\Types\AppleJuice;
use Patterns\Structural\Flyweight\Types\OrangeJuice;

final class FlyweightTest extends TestCase 
{
    public function testIfOrdersAreTaken(): void
    {
        $juiceShop = new JuiceShop(new JuiceMaker());

        $juiceShop->newOrder(new OrangeJuice());
        $juiceShop->newOrder(new AppleJuice());
        $this->assertCount(2, $juiceShop->serve());

    }
    public function testIfFlyweightsAreCached(): void
    {
        $juiceShop = new JuiceShop(new JuiceMaker());
        $juiceShop->newOrder(new OrangeJuice());
        $juiceShop->newOrder(new AppleJuice());
        $this->assertInstanceOf(OrangeJuice::class, $juiceShop->serve()[0]);
        $this->assertInstanceOf(AppleJuice::class, $juiceShop->serve()[1]);
    }

}