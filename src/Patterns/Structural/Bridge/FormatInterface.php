<?php

namespace Patterns\Structural\Bridge;

abstract class FormatInterface
{
    protected $implementation;

    public function __construct($formatter)
    {
        $this->implementation = $formatter;
    }
    abstract public function get(): string;
}
