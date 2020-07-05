<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase {
    

    public function testTwoObjectsAreTheExactSame() 
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $first);
        $this->assertSame($first, $second);
    }
}