<?php

namespace Patterns\Structural\Composite\Components;

use Patterns\Structural\Composite\PlayerInterface;

class Track implements PlayerInterface 
{

    protected $artist;
    protected $title;
    protected $path;

    public function __construct($artist, $title, $path)
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