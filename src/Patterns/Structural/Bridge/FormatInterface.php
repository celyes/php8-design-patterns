<?php

namespace Patterns\Structural\Bridge;

abstract class FormatInterface
{
    public function __construct(protected $implementation)
    {
    }
    abstract public function get(): string;
}
