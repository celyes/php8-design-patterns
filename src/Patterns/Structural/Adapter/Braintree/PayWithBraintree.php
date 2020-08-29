<?php

namespace Patterns\Structural\Adapter\Braintree;

class PayWithBraintree implements BraintreeInterface
{
    public $items = [];
    
    public function addItem(int $item): void
    {
        $this->items[] = $item;
    }
    public function getTotal(): int
    {
        return array_sum($this->items);
    }
}
