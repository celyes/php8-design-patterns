<?php

namespace Patterns\Structural\Flyweight;

class JuiceShop
{
    private $maker;
    private $orders;

    public function __construct(JuiceMaker $maker)
    {
        $this->maker = $maker;
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