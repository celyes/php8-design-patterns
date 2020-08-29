<?php

namespace Patterns\Structural\Proxy\Interfaces;

interface Reader
{
    /**
     * Opens a url to get content from
     *
     * @param   string  $url  URL to read from
     *
     * @return  string        content
     */
    public function open(string $url): string;
}
