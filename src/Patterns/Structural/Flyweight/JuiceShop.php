<?php

namespace Patterns\Structural\Flyweight;

class JuiceShop
{
    private $orders;

    public function __construct(private JuiceMaker $maker)
    {
    }

    public function newOrder($type)
    {
        $this->orders[] = $this->maker->make($type);
    }

    public function serve()
    {
        return $this->orders;
    }
}
