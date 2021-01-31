<?php

namespace Patterns\Structural\Adapter;

use Patterns\Structural\Adapter\Stripe\StripeInterface;
use Patterns\Structural\Adapter\Stripe\PayWithStripe;
use Patterns\Structural\Adapter\Braintree\PayWithBraintree;

class StripeToBraintree implements StripeInterface
{
    public function __construct(public PayWithBraintree $braintree)
    {
    }
    public function addElement(int $element): void
    {
        $this->braintree->addItem($element);
    }
    public function calculateTotal(): int
    {
        return $this->braintree->getTotal();
    }
}
