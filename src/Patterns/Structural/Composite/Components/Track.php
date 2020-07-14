<?php

namespace Patterns\Structural\Composite\Components;

use Patterns\Structural\Composite\PlayerInterface;

class Track implements PlayerInterface
{

    protected string $artist;
    protected string $title;
    protected string $path;

    public function __construct(string $artist, string $title, string $path)
    {
        $this->artist = $artist;
        $this->title = $title;
        $this->path = $path;
    }

    public function play()
    {
        return $this->path;
    }
}
