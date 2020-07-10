<?php

namespace Patterns\Structural\Adapter\Stripe;

class PayWithStripe implements StripeInterface
{
    public $elements = [];
    
    public function addElement(int $element): void
    {
        $this->elements[] = $element;
    }
    public function calculateTotal(): int
    {
        return array_sum($this->elements);
    }
}
