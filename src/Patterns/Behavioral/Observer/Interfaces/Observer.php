<?php

namespace Patterns\Behavioral\Observer\Interfaces;

interface Observer
{
    public function onEventAdded(string $event);
}
