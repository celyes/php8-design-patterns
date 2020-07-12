<?php

namespace Patterns\Structural\Bridge;

class FormatService extends FormatInterface
{

    public function get(): string
    {
        return $this->implementation->format("Hello, world");
    }
    
}