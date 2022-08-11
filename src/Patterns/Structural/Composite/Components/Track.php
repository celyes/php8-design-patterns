<?php

namespace Patterns\Structural\Composite\Components;

use Patterns\Structural\Composite\PlayerInterface;

class Track implements PlayerInterface
{
    public function __construct(protected string $artist, protected string $title, protected string $path)
    {
    }

    public function play(): string
    {
        return $this->path;
    }
}
