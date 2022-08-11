<?php

namespace Patterns\Structural\Bridge;

use Patterns\Structural\Bridge\Services\FormatterInterface;

abstract class FormattingInterface
{
    public function __construct(protected FormatterInterface $implementation)
    {
    }
    abstract public function get(): string|false;
}
