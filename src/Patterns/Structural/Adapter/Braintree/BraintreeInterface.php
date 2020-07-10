<?php

namespace Patterns\Structural\Adapter\Braintree;

interface BraintreeInterface
{
    public function addItem(int $item): void;
    public function getTotal(): int;
}
