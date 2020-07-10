<?php

namespace Patterns\Structural\Adapter;

use Patterns\Structural\Adapter\Stripe\StripeInterface;
use Patterns\Structural\Adapter\Stripe\PayWithStripe;
use Patterns\Structural\Adapter\Braintree\PayWithBraintree;

class StripeToBraintree implements StripeInterface
{
    public PayWithBraintree $braintree;
    public function __construct(PayWithBraintree $braintree)
    {
        $this->braintree = $braintree;
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
