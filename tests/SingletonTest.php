<?php declare ( strict_types = 1 ) ;

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Singleton\Singleton;

final class SingletonTest extends TestCase {
    

    public function testTwoObjectsAreTheExactSame() 
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $first);
        $this->assertSame($first, $second);
    }
}