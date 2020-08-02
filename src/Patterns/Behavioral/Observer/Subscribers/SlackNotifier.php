<?php

namespace Patterns\Behavioral\Observer\Subscribers;

use Patterns\Behavioral\Observer\Interfaces\Observer;

class SlackNotifier implements Observer
{
    public function onEventAdded(string $event)
    {
        return $event . " - slack";
    }
}
