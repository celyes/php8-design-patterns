<?php

namespace Patterns\Structural\Bridge\Services;

use Patterns\Structural\Bridge\Services\FormatterInterface;

class HTMLFormatter implements FormatterInterface
{
    public function format(string $text): string
    {
        return sprintf("<h1>%s</h1>", $text);
    }
}
