<?php

namespace Patterns\Structural\Adapter\Stripe;

class PayWithStripe implements StripeInterface
{        
    /**
     * @var array<int> $elements
     * @return void
     */
    public $elements = [];
    
    
    /**
     * @param int $element
     * @return void
     */
    public function addElement(int $element): void
    {
        $this->elements[] = $element;
    }

    /**
     * @return int
     */
    public function calculateTotal(): int
    {
        return array_sum($this->elements);
    }
}
