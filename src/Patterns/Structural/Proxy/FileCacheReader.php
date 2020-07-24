<?php

namespace Patterns\Structural\Proxy;

use Patterns\Structural\Proxy\Interfaces\Reader;

class FileCacheReader implements Reader
{
    /**
     * File reader class
     *
     * @var Object
     */

    private $reader;
    
    /**
     * Cache the content...
     *
     * @var array
     */
    private array $cache = [];
    
    /**
     * __construct assign values
     *
     * @param   FileReader  $fileReader  File reader class to use
     *
     * @return  void
     */

    public function __construct(FileReader $fileReader)
    {
        $this->reader = $fileReader;
    }

    /**
     * open URL to read if not cached or retrieve from cache
     *
     * @param   string  $url  URL to read
     *
     * @return  string  the retrieved content
     */

    public function open(string $url): string
    {
        if (!isset($this->cache[$url])) {
            $content = $this->reader->open($url);
            $this->cache[$url] = $content;
        }
        return $this->cache[$url];
    }
}
