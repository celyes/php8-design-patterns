<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Proxy\FileReader;
use Patterns\Structural\Proxy\FileCacheReader;

final class ProxyTest extends TestCase 
{

    public function testIfFileCacheReaderIsProxyingFileReader(): void
    {
        /** @var FileReader&\PHPUnit\Framework\MockObject\MockObject $filereader */
        $filereader = $this->getMockBuilder(FileReader::class)
        ->disableOriginalConstructor()
        ->getMock();

        $filereader->method('open')
        ->willReturn("some content...");

        // Proxy class for caching file content...
        $cachedReader = new FileCacheReader($filereader);
        $cachedFile = $cachedReader->open('http://www.example.com/');

        $this->assertEquals('some content...', $cachedFile);
    }
}