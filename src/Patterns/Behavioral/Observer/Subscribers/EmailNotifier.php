<?php

namespace Patterns\Behavioral\Observer\Subscribers;

use Patterns\Behavioral\Observer\Interfaces\Observer;

class EmailNotifier implements Observer
{
    public function onEventAdded(string $event): mixed
    {
        return $event . " - emails";
    }
}
