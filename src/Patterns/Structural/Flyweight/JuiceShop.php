<?php

namespace Patterns\Structural\Flyweight;

use Patterns\Structural\Flyweight\Types\JuiceType;

class JuiceShop
{

    /**
     * @var array<JuiceType> $orders
     */
    private $orders;

    public function __construct(private JuiceMaker $maker)
    {}

    /**
     * @param JuiceType $type
     * @return void
     */
    public function newOrder(JuiceType $type): void
    {
        $this->orders[] = $this->maker->make($type);
    }


    /**
     * @return array<JuiceType>
     */
    public function serve()
    {
        return $this->orders;
    }
}
