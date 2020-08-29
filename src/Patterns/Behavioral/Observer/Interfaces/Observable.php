<?php

namespace Patterns\Behavioral\Observer\Interfaces;

interface Observable
{
    public function attach(Observer $subscriber);
    public function addEvent(string $event);
}
