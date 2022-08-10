<?php

namespace Patterns\Structural\Bridge\Services;

class JSONFormatter implements FormatterInterface
{
    public function format(string $text): string|false
    {
        return json_encode(["message" => $text]);
    }
}
