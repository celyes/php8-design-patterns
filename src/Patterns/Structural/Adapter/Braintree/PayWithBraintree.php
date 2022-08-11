<?php

namespace Patterns\Structural\Adapter\Braintree;

class PayWithBraintree implements BraintreeInterface
{
    /**
     * @var array<int> $items
     */
    public $items = [];

    /**
     * @param int $item
     * @return void
     */
    public function addItem(int $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return array_sum($this->items);
    }
}
