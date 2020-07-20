<?php

namespace Patterns\Structural\Proxy;

use Patterns\Structural\Proxy\Interfaces\Reader;

class FileReader implements Reader
{
    /**
     * open URL to read
     *
     * @param   string  $url  URL to read
     *
     * @return  string  the retrieved content 
     */

    public function open(string $url): string
    {
        return file_get_contents($url);
    }
}