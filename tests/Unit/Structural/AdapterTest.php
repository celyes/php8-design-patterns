<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Adapter\StripeToBraintree;
use Patterns\Structural\Adapter\Braintree\PayWithBraintree;

final class AdapterTest extends TestCase 
{
    

    public function testIfAdapterIsWorking() 
    {
        $adapter = new StripeToBraintree(new PayWithBraintree());
        $adapter->addElement(2500);
        $adapter->addElement(3000);
        $adapter->addElement(1500);
        $this->assertSame(7000, $adapter->calculateTotal());
    }
}