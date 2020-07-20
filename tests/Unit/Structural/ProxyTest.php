<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Proxy\FileReader;
use Patterns\Structural\Proxy\FileCacheReader;

final class ProxyTest extends TestCase 
{

    public function testIfFileCacheReaderIsProxyingFileReader()
    {
        // Normal file reader...
        $reader = new FileReader();
        $file = $reader->open('http://www.example.com/');

        // Proxy class for caching file content...
        $cachedReader = new FileCacheReader(new FileReader());
        $cachedFile = $cachedReader->open('http://www.example.com/');

        $this->assertEquals($file, $cachedFile);

    }
}