<?php

namespace Patterns\Structural\Bridge;

class FormattingService extends FormattingInterface
{

    public function get(): string|false
    {
        return $this->implementation->format("Hello, world");
    }
}
