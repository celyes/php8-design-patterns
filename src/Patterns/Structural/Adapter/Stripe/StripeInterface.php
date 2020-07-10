<?php

namespace Patterns\Structural\Adapter\Stripe;

interface StripeInterface
{
    public function addElement(int $element): void;
    public function calculateTotal(): int;
}
