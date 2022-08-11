<?php

namespace Patterns\Behavioral\Observer\Interfaces;

use Patterns\Behavioral\Observer\Interfaces\Observer;

interface Observable
{
    /**
     * @return array<Observer>
     */
    public function getSubscribers(): array;
    public function attach(Observer $subscriber): void;
    public function addEvent(string $event): void;
}
